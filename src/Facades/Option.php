<?php

namespace Combindma\Option\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Combindma\Option\Option
 */
class Option extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Combindma\Option\Option::class;
    }
}
