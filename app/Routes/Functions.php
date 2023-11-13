<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->post('/', 'Auth::login');
// $routes->post('/', 'Auth::user');

$routes->get('/user/logout', 'Auth::logout');

$routes->get('/guarantee/delete/(:hash)', 'Guarantee::delete/$1');

$routes->get('/guarantee/insertdummy', 'Guarantee::dummyJaminanData');

$routes->post('/guarantee/add', 'Guarantee::phase1_process');
$routes->post('/guarantee/add/(:hash)', 'Guarantee::phase2_process/$1');
$routes->post('/guarantee/print/(:hash)', 'Guarantee::settings/$1');
$routes->post('/guarantee/profile/apply', 'Guarantee::applySetting');
$routes->post('/guarantee/profile/edit', 'Guarantee::editSetting');

$routes->post('/blanko/used', 'Guarantee::blankoUse');
$routes->post('/blanko/crash', 'Guarantee::blankoCrash');

$routes->get('/inforce/request/(:hash)', 'Inforce::newRequest/$1');

$routes->post('/inforce', 'Inforce::process');
$routes->get('user/editImage', 'Setting::photo');
$routes->get('user/editProfile', 'Setting::profile');
$routes->get('user/changePass', 'Setting::change');

$routes->post('/client/add', 'Client::addNew');
$routes->post('/client/upload', 'Client::uploadFile');
$routes->post('/client/detail/(:hash)', 'Client::addPeople/$1');
$routes->get('/client/people/delete/(:hash)', 'Client::deletePeople/$1');
$routes->post('/client/info/edit/(:hash)', 'Client::editInfo/$1');
