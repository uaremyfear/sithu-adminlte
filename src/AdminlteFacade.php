<?php

namespace Sithu\Adminlte;

use Illuminate\Support\Facades\Facade;

class AdminlteFacade extends Facade
{
    protected static function getFacadeAccessor() { 
        return 'sithu-adminlte';
    }
}
