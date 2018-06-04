<?php

return [

    /**
     * Database Adapter
     *
     * mysql, postgresql, sqlite
     */
    'default' => env('DB_ADAPTER', 'mysql'),


    /**
     * Database configure
     */
    'connections' => [
        'mysql' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'dbname' => env('DB_DATABASE', ''),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'prefix' => env('DB_PREFIX', ''),
            'charset' => 'utf8',

            // optional
            // 'persistent' => false,
        ],

        'postgresql' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'dbname' => env('DB_DATABASE', 'template'),
            'username' => env('DB_USERNAME', 'postgres'),
            'password' => env('DB_PASSWORD', 'secret'),

            // optional
            // 'schema' => 'public'
        ],

        'sqlite' => [
            'dbname' => env('DB_DATABASE', '/path/to/database.db'),
        ]
    ]
];