<?php

namespace crocodicstudio\crudbooster\Modules\StatisticModule;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class CbStatisticsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->addNamespace('CbStatistics', __DIR__.'/views');
        $this->loadRoutesFrom( __DIR__.'/statistic_route.php');
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        app('CbDynamicMenus')->addSuperAdminMenu('CbStatistics::menu');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
