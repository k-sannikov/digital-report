<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class DigitalReportFacade extends Facade
{
    /**
     * Gets the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'DigitalReport';
    }
}
