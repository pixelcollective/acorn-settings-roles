<?php

namespace TinyPixel\Roles\Providers;

use \TinyPixel\Roles\Roles;
use \Illuminate\Support\Collection;

use function \Roots\config_path;

use \Roots\Acorn\ServiceProvider;

class RolesServiceProvider extends ServiceProvider
{
    /**
      * Register any application services.
      *
      * @return void
      */
    public function register()
    {
        $this->app->singleton('wordpress.roles', function () {
            return new Roles($this->app);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/roles.php' => config_path('roles.php')]);

        $this->app->make('wordpress.roles')->configureRoles(Collection::make(
            $this->app['config']->get('admin.roles')
        ));
    }
}
