<?php

$baseConfig['routes'] = [
    0 => [
        'GET',
        '/',
        'index',
    ],
    1 => [
        'GET',
        '/index[/{action}]',
        'index',
    ],
    2 => [
        ['GET', 'POST'],
        '/products[/{action}[/{id:[0-9]+}]]',
        'product',
    ],
    3 => [
        'GET',
        '/baz[/{action}]',
        'specialmodule/index',
    ],
    4 => [
        'GET',
        '/admin[/{action}]',
        'specialmodule/index',
    ],
    5 => [
        'GET',
        '/about[/{action}]',
        'about',
    ],
    6 => [
        'GET',
        '/foo[/{action}]',
        'strangecontroller/foo',
    ],
    7 => [
        'GET',
        '/login[/{action}]',
        'login',
    ],
];