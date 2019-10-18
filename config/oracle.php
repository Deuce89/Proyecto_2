<?php

return [
    'oracle' => [
        'driver'         => 'oracle',
        //'tns'            => env('DB_TNS', '(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.142.130)(PORT = 1521)) (CONNECT_DATA = (SERVER = DEDICATED) (SERVICE_NAME = XE)))'),
        //'host'           => env('DB_HOST', '172.16.142.130'),
        //'port'           => env('DB_PORT', '1521'),
        'tns'           => env('DB_TNS', ''),
        'host'          => env('DB_HOST', ''),
        'port'          => env('DB_PORT', '1521'),
        'database'       => env('DB_DATABASE', ''),
        'username'       => env('DB_USERNAME', ''),
        'password'       => env('DB_PASSWORD', ''),
        'charset'        => env('DB_CHARSET', 'AL32UTF8'),
        'prefix'         => env('DB_PREFIX', ''),
        'prefix_schema'  => env('DB_SCHEMA_PREFIX', ''),
        'edition'        => env('DB_EDITION', 'ora$base'),
        'server_version' => env('DB_SERVER_VERSION', '11g'),
    ],
];
