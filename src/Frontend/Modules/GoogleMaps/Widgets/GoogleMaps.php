<?php

namespace Frontend\Modules\GoogleMaps\Widgets;

use Frontend\Core\Engine\Base\Widget as FrontendBaseWidget;
use Frontend\Core\Engine\Model as FrontendModel;

/**
 * This is a simple widget for Google Maps.
 *
 * @author Lander Vanderstraeten <lander.vanderstraeten@wijs.be>
 */
class GoogleMaps extends FrontendBaseWidget
{
    /**
     * Execute the extra.
     */
    public function execute()
    {
        parent::execute();
        $this->loadTemplate();
        $this->parse();
    }

    /**
     * Parse.
     */
    private function parse()
    {
        $address = FrontendModel::getModuleSetting('GoogleMaps', 'address_'.FRONTEND_LANGUAGE);

        $src = 'https://maps.google.com/maps'.
            // language
            '?hl='.FRONTEND_LANGUAGE.
            // address
            '&amp;q='.$address.
            // UTF-8
            '&amp;ie=UTF8'.
            // Embed
            '&amp;output=embed';

        $this->tpl->assign('src', $src);
    }
}
