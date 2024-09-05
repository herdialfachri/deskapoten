<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/potensi', 'Home::potensi');
$routes->get('/umkm', 'Home::umkm');
$routes->get('/pertambangan', 'Home::pertambangan');
$routes->get('/kontak', 'Home::kontak');