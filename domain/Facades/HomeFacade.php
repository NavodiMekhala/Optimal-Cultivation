<?php

namespace domain\Facades;

use domain\Services\HomeService;
use Illuminate\Support\Facades\Facade;

class HomeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return HomeService::class;
    }
}
