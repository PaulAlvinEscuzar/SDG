<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sdg1', 'SDGControl::sdg1');
$routes->get('/health_wellbeing', 'SDGControl::health_wellbeing_form');
$routes->get('/sdg3', 'SDGControl::sdg3');