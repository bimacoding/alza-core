<?php

namespace Alza\Facades;

use Alza\Kernel\Facade;

class Log extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'log';
    }
}