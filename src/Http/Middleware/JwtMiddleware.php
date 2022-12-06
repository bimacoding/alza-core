<?php

namespace Alza\Http\Middleware;

use Exception;
use Alza\Auth\Jwt\JwtException;
use Alza\Http\Middleware;

class JwtMiddleware extends Middleware
{
    /**
     * This method will be triggered
     * when the middleware is called
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            auth()->jwt()->check();
        } catch (JwtException $e) {
            return $this->failed($e);
        }

        return true;
    }

    /**
     * @param Exception $exception
     *
     * @return \Alza\Http\Response|string
     */
    protected function failed(Exception $exception)
    {
        return response()->json([
            'success' => false,
            'error' => $exception->getMessage(),
        ], 401);
    }
}
