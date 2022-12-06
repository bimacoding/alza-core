<?php

namespace Alza\Facades;

use Alza\Kernel\Facade;

class Uri extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'uri';
    }
}