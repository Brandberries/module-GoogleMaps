<?php

namespace Backend\Modules\GoogleMaps\Installer;

use Backend\Core\Installer\ModuleInstaller;

/**
 * Installer for the Google Maps module.
 *
 * @author Lander Vanderstraeten <lander.vanderstraeten@wijs.be>
 */
class Installer extends ModuleInstaller
{
    public function install()
    {
        $this->addModule('GoogleMaps');

        $this->importLocale(dirname(__FILE__).'/Data/locale.xml');

        $this->setModuleRights(1, 'GoogleMaps');

        foreach ($this->getLanguages() as $language) {
            $this->setSetting('GoogleMaps', 'address_'.$language, 'Voorhavenlaan 31 Gent');
        }

        $this->setActionRights(1, 'GoogleMaps', 'Settings');

        $this->insertExtra('GoogleMaps', 'widget', 'GoogleMaps', 'GoogleMaps', null, 'N', 10000);

        $navigationSettingsId = $this->setNavigation(null, 'Settings');
        $navigationModulesId = $this->setNavigation($navigationSettingsId, 'Modules');
        $this->setNavigation($navigationModulesId, 'GoogleMaps', 'google_maps/settings');
    }
}
