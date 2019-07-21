<?php

namespace TinyPixel\Settings\Providers;

use \TinyPixel\Settings\Roles;
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
        $this->publishes([__DIR__ . '/../config/wordpress/roles.php' => config_path('wordpress/roles.php')]);

        $this->app->make('wordpress.roles')->configureRoles(Collection::make(
            $this->app['config']->get('wordpress.roles')
        ));
    }
}
