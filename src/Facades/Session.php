<?php

namespace Alza\Facades;

use Alza\Kernel\Facade;

class Session extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Alza\Http\Session::class;
    }
}