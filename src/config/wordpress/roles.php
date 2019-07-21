<?php

/*
|--------------------------------------------------------------------------
| WordPress Roles
|--------------------------------------------------------------------------
|
| WordPress uses a concept of Roles, designed to give the site owner the
| ability to control what users can and cannot do within the site. A site
| owner can manage the user access to such tasks as writing and editing posts,
| creating Pages, creating categories, moderating comments, managing plugins,
| managing themes, and managing other users, by assigning a specific
| role to each of the users.
|
| Here you may specify what capabilities are afforded to the six pre-defined
| WordPress roles. These capabilities can be intrinsic or custom.
|
*/

return [

    /*
    |--------------------------------------------------------------------------
    | Administrator Role
    |--------------------------------------------------------------------------
    |
    | The capabilities of Administrators differs between single site and
    | Multisite WordPress installations. Administrators in a single site
    | context have accesst to privileges like `update_core`, `delete_themes`,
    | etc. In a multisite context these privileges are restricted to
    | Super Administrators.
    |
    | @link https://wordpress.org/support/article/roles-and-capabilities/#additional-admin-capabilities
    |
    */

    'administrator' => [
        'display_name' => 'Administrator',
        'capabilities' => [
            'activate_plugins',
            'create_users',
            'customize',
            'delete_users',
            'delete_themes',
            'delete_pages',
            'delete_others_pages',
            'delete_published_pages',
            'delete_posts',
            'delete_others_posts',
            'delete_published_posts',
            'delete_private_pages',
            'delete_private_posts',
            'edit_pages',
            'edit_others_posts',
            'edit_others_pages',
            'edit_posts',
            'edit_private_pages',
            'edit_published_pages',
            'edit_published_posts',
            'edit_themes',
            'edit_theme_options',
            'edit_plugins',
            'edit_users',
            'edit_files',
            'export',
            'import',
            'level_10',
            'level_9',
            'level_8',
            'level_7',
            'level_6',
            'level_5',
            'level_4',
            'level_3',
            'level_2',
            'level_1',
            'level_0',
            'list_users',
            'manage_options',
            'moderate_comments',
            'manage_links',
            'publish_pages',
            'publish_posts',
            'read',
            'upload_files',
            'unfiltered_html',
            'edit_private_posts',
            'read_private_posts',
            'read_private_pages',
            'unfiltered_upload',
            'edit_dashboard',
            'update_plugins',
            'delete_plugins',
            'install_plugins',
            'update_themes',
            'install_themes',
            'update_core',
            'remove_users',
            'promote_users',
            'switch_themes',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Editor Role
    |--------------------------------------------------------------------------
    |
    */

    'editor' => [
        'display_name' => 'Editor',
        'capabilities' => [
            'delete_pages',
            'delete_others_pages',
            'delete_published_pages',
            'delete_posts',
            'delete_others_posts',
            'delete_published_posts',
            'delete_private_posts',
            'delete_private_pages',
            'edit_posts',
            'edit_others_posts',
            'edit_published_posts',
            'edit_private_posts',
            'edit_others_pages',
            'edit_published_pages',
            'edit_private_pages',
            'edit_pages',
            'manage_links',
            'moderate_comments',
            'manage_categories',
            'publish_posts',
            'publish_pages',
            'read',
            'read_private_posts',
            'read_private_pages',
            'upload_files',
            'unfiltered_html',
            'level_7',
            'level_6',
            'level_5',
            'level_4',
            'level_3',
            'level_2',
            'level_1',
            'level_0',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Author Role
    |--------------------------------------------------------------------------
    |
    */

    'author' => [
        'display_name' => 'Author',
        'capabilities' => [
            'upload_files',
            'edit_posts',
            'edit_published_posts',
            'publish_posts',
            'read',
            'level_2',
            'level_1',
            'level_0',
            'delete_posts',
            'delete_published_posts',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Contributor Role
    |--------------------------------------------------------------------------
    |
    */

    'contributor' => [
        'display_name' => 'Contributor',
        'capabilities' => [
            'edit_posts',
            'read',
            'level_1',
            'level_0',
            'delete_posts',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Subscriber Role
    |--------------------------------------------------------------------------
    |
    */

    'subscriber' => [
        'display_name' => 'Subscriber',
        'capabilities' => [
            'read',
            'level_0',
        ],
    ],
];
