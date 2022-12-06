<?php

namespace Alza\Facades;

use Alza\Kernel\Facade;

/**
 * @method static bool check()
 * @method static bool guest()
 * @method static \Alza\Database\Model|null user()
 * @method static int|null id()
 * @method static bool validate(array $credentials = [])
 * @method static bool attempt(array $credentials = [], bool $remember = false)
 * @method static bool login(\Alza\Database\Model $user, bool $remember = false)
 * @method static bool loginUsingId(mixed $id, bool $remember = false)
 * @method static void logout()
 *
 * @see \Alza\Auth\Auth
 */
class Auth extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Alza\Auth\Auth::class;
    }
}
