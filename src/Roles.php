<?php

namespace TinyPixel\Settings;

use \WP_Role;
use function \get_role;
use function \add_role;

use \Illuminate\Support\Collection;
use \Illuminate\Support\Facades\Cache;

use \Roots\Acorn\Application;

class Roles
{
    /**
     * Construct
     *
     * @param  \Roots\Acorn\Application IOC
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Provides list of roles from config
     *
     * @param \Illuminate\Support\Collection $desiredRoles
     * @return void
     */
    public function configureRoles(Collection $desiredRoles)
    {
        $this->desiredRoles = $desiredRoles;

        add_action('admin_init', [$this, 'setWithCache']);
    }

    /**
     * Sets roles via \Illuminate\Support\Facades\Cache
     * Run `wp acorn optimize:clear` to flush when changing roles or caps
     *
     * @return void
     */
    public function setWithCache()
    {
        Cache::rememberForever('roles', function () {
            return $this->set();
        });
    }

    /**
     * Sets roles and capabilities
     *
     * @return void
     */
    public function set()
    {
        $this->desiredRoles->each(function ($desiredRole, $desiredRoleId) {
            $role = $this->getRole($desiredRoleId);

            $this->removeCapabilities($role, Collection::make(
                Collection::make($role->capabilities)->except($desiredRole['capabilities'])
            ));

            $this->addCapabilities($role, Collection::make(
                $desiredRole['capabilities']
            ));
        });
    }

    /**
     * Get Role
     *
     * @param  string   $roleId
     * @return \WP_Role
     */
    public function getRole(string $roleId)
    {
        $role = get_role($roleId);

        if (!$role) {
            $role = add_role($desiredRoleId, $desiredRole['display_name']);
        }

        return $role;
    }

    /**
     * Removes capabilities to a user role
     *
     * @param \WP_Role                       $role
     * @param \Illuminate\Support\Collection $capabilities
     * @return void
     */
    public function removeCapabilities(WP_Role $role, Collection $capabilities)
    {
        $capabilities->each(function ($value, $capability) use ($role) {
            $role->remove_cap($capability);
        });
    }

    /**
     * Adds capabilities to a user role
     *
     * @param \WP_Role                       $role
     * @param \Illuminate\Support\Collection $capabilities
     * @return void
     */
    public function addCapabilities(WP_Role $role, Collection $capabilities)
    {
        $capabilities->each(function ($cap) use ($role, $capabilities) {
            if (!$capabilities->has($cap)) {
                $role->add_cap($cap);
            }
        });
    }
}
