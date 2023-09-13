<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/user', 'User::index');

$routes->get('/setting', 'Setting::index');

$routes->get('/search', 'Search::index');

$routes->get('/insurance', 'Insurance::index');

$routes->get('/client', 'Client::index');
$routes->get('/client/add', 'Client::add');
$routes->get('/client/detail/(:hash)', 'Client::detail/$1');
$routes->get('/client/info/edit/(:hash)', 'Client::edit_info/$1');

$routes->get('/inforce', 'Inforce::index');

$routes->get('/guarantee', 'Guarantee::index');
$routes->get('/guarantee/issued', 'Guarantee::index');
$routes->get('/guarantee/detail/(:hash)', 'Guarantee::detail/$1');
$routes->get('/guarantee/add', 'Guarantee::add_phase1');
$routes->get('/guarantee/add/(:hash)', 'Guarantee::add_phase2/$1');
$routes->get('/guarantee/print/(:hash)', 'Guarantee::print/$1');

$routes->get('/img/pattern/(:segment)', 'Image::show_pattern/$1');
