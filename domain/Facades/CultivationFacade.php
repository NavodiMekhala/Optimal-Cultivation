<?php

namespace domain\Facades;

use domain\Services\CultivationService;
use Illuminate\Support\Facades\Facade;

class CultivationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return CultivationService::class;
    }
}
