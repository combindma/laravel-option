<?php

use Combindma\Option\Option;
use Spatie\Valuestore\Valuestore;

if (! function_exists('option')) {
    function option(): Valuestore
    {
        return (new Option)->make();
    }
}
