<?php

namespace Alza\Facades;

use Alza\Kernel\Facade;

class Cookie extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Alza\Http\Cookie::class;
    }
}