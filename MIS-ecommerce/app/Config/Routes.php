<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/product-views', 'Home::index');
$routes->get('/product-add', 'Home::create');
$routes->post('/product-add/store', 'Home::store');
$routes->get('/product-edit/edit/(:num)', 'Home::edit/$1');
$routes->put('/product-update/update/(:num)', 'Home::update/$1');
$routes->get('/product-destroy/destroy/(:num)', 'Home::destroy/$1');
