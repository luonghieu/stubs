<?php

namespace Hieuluong\Stubs;

use Illuminate\Support\ServiceProvider;
use Hieuluong\Stubs\Commands\MakeAction;
use Hieuluong\Stubs\Commands\MakeTask;

class ExampleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config-porto.php' => config_path('config-porto.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeAction::class,
                MakeTask::class
            ]);
        }
    }
}
