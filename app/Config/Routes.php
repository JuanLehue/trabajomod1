<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StockController::index');
$routes->get('/verDetalle/(:num)', 'StockController::verDetalle/$1');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . 'Routes.php')){
    require APPPATH . 'Config/' . ENVIRONMENT . 'Routes.php';
}//<- Habilita el entorno de desarrollo 