<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sdg1', 'SDGControl::sdg1');
$routes->get('/formsdg3', 'SDGControl::formsdg3');
$routes->get('/sdg3', 'SDGControl::sdg3');