<?php

namespace Alza\Facades;

use Alza\Kernel\Facade;

class Load extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'load';
    }
}