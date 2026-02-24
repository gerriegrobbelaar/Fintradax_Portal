<?php
/**
 * Route definitions for Fintradax Portal
 * Maps URLs to controllers (to be implemented)
 */

return [
    // Auth routes
    'GET' => [
        '/' => 'DashboardController@index',
        '/login' => 'AuthController@login',
        '/auth/callback' => 'AuthController@callback',
        '/logout' => 'AuthController@logout',
        '/dashboard' => 'DashboardController@index',
    ],
    
    'POST' => [
        '/apps/kvk/search' => 'KvkController@handleSearch',
        '/apps/kvk/select' => 'KvkController@selectCompany',
    ]
];
