<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// --- JSON Table --------------------------------------------------------
$routes->get('/tb/guarantee/(:segment)/(:num)', 'Guarantee::table/$1/$2');
$routes->get('/tb/inforce/(:num)', 'Inforce::table/$1');
$routes->get('/tb/client/(:num)', 'Client::table/$1');

// --- JSON Data ---------------------------------------------------------
$routes->get('/d/client', 'Client::dataList');
$routes->get('/d/client/person/(:hash)', 'Client::people/$1');
$routes->get('/d/insurance/(:hash)', 'Insurance::dataCabang/$1');
$routes->get('/d/insurance/person/(:hash)', 'Insurance::dataPeople/$1');

// --- JSON Views --------------------------------------------------------
$routes->get('/v/client/(:hash)', 'Client::info/$1');
