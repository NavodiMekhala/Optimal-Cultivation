<?php

namespace domain\Facades;

use domain\Services\ClimateService;
use Illuminate\Support\Facades\Facade;

class ClimateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ClimateService::class;
    }
}
