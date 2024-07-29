<?php

namespace Combindma\Option;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OptionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-option')
            ->hasConfigFile('option')
            ->hasMigration('create_options_table');
    }
}
