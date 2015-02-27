<?php

namespace Frontend\Modules\GoogleMaps;

use Frontend\Core\Engine\Base\Config as FrontendBaseConfig;

/**
 * This is a simple widget for Google Maps.
 *
 * @author Lander Vanderstraeten <lander.vanderstraeten@wijs.be>
 */
class Config extends FrontendBaseConfig
{
    /**
     * The default action.
     *
     * @var string
     */
    protected $defaultAction = 'Index';

    /**
     * The disabled actions.
     *
     * @var array
     */
    protected $disabledActions = array();
}
