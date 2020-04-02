<?php

return [
    'name' => 'Dinkes Melawi',
    'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'Dinkes Melawi',
        'start_url' => '/',
        'background_color' => '#00989b',
        'theme_color' => '#00989b',
        'display' => 'standalone',
        'orientation'=> 'any',
        'icons' => [
            '51x72' => '/img/icons/icon-72x72.png',
            '68x96' => '/img/icons/icon-96x96.png',
            '91x128' => '/img/icons/icon-128x128.png',
            '102x144' => '/img/icons/icon-144x144.png',
            '108x152' => '/img/icons/icon-152x152.png',
            '137x192' => '/img/icons/icon-192x192.png',
            '228x320' => '/img/icons/icon-384x384.png',
            '228x320' => '/img/icons/icon-512x512.png'
        ],
        'custom' => []
    ]
];
