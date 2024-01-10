<?php

namespace Pratikkuikel\Wasabi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pratikkuikel\Wasabi\Wasabi
 */
class Wasabi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pratikkuikel\Wasabi\Wasabi::class;
    }
}
