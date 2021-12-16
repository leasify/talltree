<?php

namespace Leasify\TallTree;

use Leasify\TallTree\Commands\TallTreeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TallTreeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('talltree')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_talltree_table')
            ->hasCommand(TallTreeCommand::class);
    }
}
