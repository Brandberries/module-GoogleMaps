<?php

namespace Backend\Modules\GoogleMaps;

use Backend\Core\Engine\Base\Config as BackendBaseConfig;

/**
 * This is the configuration-object for the GoogleMaps module.
 *
 * @author Lander Vanderstraeten <lander.vanderstraeten@wijs.be>
 */
class Config extends BackendBaseConfig
{
    /**
     * The default action.
     *
     * @var string
     */
    protected $defaultAction = 'Settings';

    /**
     * The disabled actions.
     *
     * @var array
     */
    protected $disabledActions = array();
}
