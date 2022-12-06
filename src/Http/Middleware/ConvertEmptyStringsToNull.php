<?php

namespace Alza\Http\Middleware;

class ConvertEmptyStringsToNull extends TransformsRequest
{
    protected function transform(string $key, $value)
    {
        return $value === '' ? null : $value;
    }
}