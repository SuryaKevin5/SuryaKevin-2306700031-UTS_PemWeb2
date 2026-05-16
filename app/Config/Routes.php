<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Doa::index');

$routes->get('detail/(:num)', 'Doa::detail/$1');

$routes->get('random', 'Doa::random');

$routes->get('search', 'Doa::search');