<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ViewmodServiceProvider extends ServiceProvider
{
    private $namespace = 'App\Modules';
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        foreach (config('modular.modules') as $module_name => $module) {
            $this->addViews(strtolower($module_name));
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    
    public function addViews($module_name) {
        View::addNamespace($module_name, module_path($module_name, 'views'));
    }
}
