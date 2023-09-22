<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/product', 'ProductController::index');
$routes->post('/save', 'ProductController::save');
$routes->get('/delete/(:any)', 'ProductController::delete/$1');
$routes->get('/edit/(:any)', 'ProductController::edit/$1');
$routes->get('/categories/(:any)', 'ProductController::categories/$1');
$routes->get('/addcat', 'ProductController::addcat');
$routes->post('/saveCat', 'ProductController::saveCat');
$routes->get('/addprod', 'ProductController::addprod');
