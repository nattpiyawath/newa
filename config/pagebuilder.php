<?php

return [
    /*
     |--------------------------------------------------------------------------
     | General settings
     |--------------------------------------------------------------------------
     |
     | General settings for configuring the PageBuilder.
     |
     */
    'general' => [
        'base_url' => env('APP_URL'),
        'language' => 'en',
        'assets_url' => '/assets',
        'uploads_url' => env('APP_URL').'/storage/app/uploads/Posts',
        'my_upload' => env('APP_URL').'/storage/app/uploads/',
        'auth' => 'logged',
    ],

    /*
     |--------------------------------------------------------------------------
     | Storage settings
     |--------------------------------------------------------------------------
     |
     | Database and file storage settings.
     |
     */
    'storage' => [
        'use_database' => true,
        'database' => [
            'driver'    => 'mysql',
            'host'      => env('DB_HOST').':'.env('DB_PORT',3306),
            'database'  => 'giantand_carncx',
            'username'  => 'giantand_carncx',
            'password'  => '.z]8fi=Q[sEv',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],
        'uploads_folder' => storage_path('app/uploads/Posts')
    ],

    /*
     |--------------------------------------------------------------------------
     | Auth settings
     |--------------------------------------------------------------------------
     |
     | By default an authentication class is provided which checks for the
     | credentials configured in this setting block.
     |
     */
    'auth' => [
        'use_login' => true,
        'class' => PHPageBuilder\Modules\Auth\Auth::class,
        'url' => '/admin/auth',
        'username' => 'sengly',
        'password' => '123@$45678'
    ],

    /*
     |--------------------------------------------------------------------------
     | WebsiteManager settings
     |--------------------------------------------------------------------------
     |
     | By default a basic WebsiteManager is provided for creating/editing pages.
     |
     */
    'website_manager' => [
        'use_website_manager' => true,
        'class' => PHPageBuilder\Modules\WebsiteManager\WebsiteManager::class,
        'url' => '/pagemanager'
    ],

    /*
     |--------------------------------------------------------------------------
     | Website settings
     |--------------------------------------------------------------------------
     |
     | By default a setting class is provided for accessing website settings.
     |
     */
    'setting' => [
        'class' => PHPageBuilder\Setting::class
    ],

    /*
     |--------------------------------------------------------------------------
     | PageBuilder settings
     |--------------------------------------------------------------------------
     |
     | By default a PageBuilder is provided based on GrapesJS.
     |
     */
    'pagebuilder' => [
        'class' => PHPageBuilder\Modules\GrapesJS\PageBuilder::class,
        'url' => '/pagemanager/pagebuilder',
        'actions' => [
            'back' => '/admin/pages'
        ]
    ],

    /*
     |--------------------------------------------------------------------------
     | Page settings
     |--------------------------------------------------------------------------
     |
     | By default a Page class is provided with knowledge about its layout and URL.
     |
     */
    'page' => [
        'class' => PHPageBuilder\Page::class,
        'table' => 'pages',
        'translation' => [
            'class' => PHPageBuilder\PageTranslation::class,
            'table' => 'page_translations',
            'foreign_key' => 'page_id',
        ]
    ],

    /*
     |--------------------------------------------------------------------------
     | Cache settings
     |--------------------------------------------------------------------------
     |
     | Faster load time by skipping block parsing if the page has been requested before.
     | A page will be cached, except if it contains a block with caching set to false.
     | This can be used to prevent caching pages with content that varies per page load.
     | The cached html is removed if the page is saved again in the page builder.
     |
     */
    'cache' => [
        'enabled' => false,
        'folder' => __DIR__ . '/cache',
        'class' => PHPageBuilder\Cache::class
    ],

    /*
     |--------------------------------------------------------------------------
     | Theme settings
     |--------------------------------------------------------------------------
     |
     | PageBuilder requires a themes folder in which for each theme the individual
     | theme blocks are defined. A theme block is a sub folder in the themes folder
     | containing a view, model (optional) and controller (optional).
     |
     */
    'theme' => [
        'class' => PHPageBuilder\Theme::class,
        'folder' => base_path('themes'),
        'folder_url' => '/themes',
        'active_theme' => 'giant'
    ],

    /*
     |--------------------------------------------------------------------------
     | Routing settings
     |--------------------------------------------------------------------------
     |
     | Settings for resolving pages based on the current URI.
     |
     */
    'router' => [
        'class' => PHPageBuilder\Modules\Router\DatabasePageRouter::class,
        'use_router' => true
    ],

    /*
     |--------------------------------------------------------------------------
     | Class replacements
     |--------------------------------------------------------------------------
     |
     | Allows mapping a class namespace to an alternative namespace,
     | useful for replacing implementations of specific pagebuilder classes.
     | Example: PHPageBuilder\UploadedFile::class => Alternative\UploadedFile::class
     | Important: when overriding a class always extend the original class.
     |
     */
    'class_replacements' => [
    ],
];