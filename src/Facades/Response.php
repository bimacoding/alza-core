<?php

namespace Alza\Facades;

use Alza\Http\Response as BaseResponse;
use Alza\Kernel\Facade;

/**
 * @method static BaseResponse json($data = null, int $statusCode = 200)
 * @method static BaseResponse header($key, string $value)
 * @method static BaseResponse|null view(string $view, array $data = [])
 * @method static BaseResponse|null blade(string $view, array $data = [], array $mergeData = [])
 *
 * @see \Alza\Http\Response
 */
class Response extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseResponse::class;
    }
}
