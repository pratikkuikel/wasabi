<?php

namespace Pratikkuikel\Wasabi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pratikkuikel\Wasabi\Commands\WasabiCommand;

class WasabiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wasabi')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_wasabi_table')
            ->hasCommand(WasabiCommand::class);
    }
}
