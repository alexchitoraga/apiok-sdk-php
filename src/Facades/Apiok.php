<?php

namespace Alexchitoraga\Apiok\Facades;

use Illuminate\Support\Facades\Facade;

class Apiok extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'apiok';
    }
}