<?php

namespace Pratikkuikel\Wasabi;

use Pratikkuikel\Wasabi\Commands\WasabiCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
