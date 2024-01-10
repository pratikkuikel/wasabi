<?php

namespace Pratik Kuikel\Wasabi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pratik Kuikel\Wasabi\Wasabi
 */
class Wasabi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Pratik Kuikel\Wasabi\Wasabi::class;
    }
}
