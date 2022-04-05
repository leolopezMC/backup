<?php

namespace Leolopez\Backup\Facades;

use Illuminate\Support\Facades\Facade;

class Backup extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'backup';
    }
}
