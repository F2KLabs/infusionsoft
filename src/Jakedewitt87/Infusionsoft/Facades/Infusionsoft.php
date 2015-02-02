<?php
namespace Jakedewitt87\Infusionsoft\Facades;

use Illuminate\Support\Facades\Facade;

class Infusionsoft extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'infusionsoft'; }

}