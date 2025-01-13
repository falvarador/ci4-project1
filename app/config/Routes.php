<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/',  [Home::class, 'index']);
$routes->get('/db', [Home::class, 'db']);

$routes->resource('employees', [
    "placeholder" => "(:numm)",
    "except" => ["show"]
]);
