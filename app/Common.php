<?php

define('SURETY_DOMAIN', 'https://surety.ptjis.com/');

if (!function_exists('env_is')) {
    /** Cek Environment saat ini
     * @param string $env tipe environtment
     */
    function env_is(string $env)
    {
        $environtment = getenv('CI_ENVIRONMENT') ?: 'production';
        return ($env == $environtment);
    }
}

function setAllRoutes($routes)
{
    $routes->get('/', 'Login::index');
    $routes->post('/', 'Auth::user');

    $routes->get('/user', 'User::index');
    $routes->get('/user/logout', 'Auth::logout');

    $routes->get('/guarantee', 'Guarantee::index');
    $routes->get('/guarantee/issued', 'Guarantee::index');
    $routes->get('/guarantee/detail', 'Guarantee::detail');
    $routes->get('/guarantee/print', 'Guarantee::print');
    $routes->post('/guarantee/print', 'Guarantee::add_margin');
    $routes->post('/guarantee/print', 'Guarantee::add_width');
    $routes->get('/guarantee/add', 'Guarantee::add');
    $routes->post('/guarantee/add', 'Guarantee::add_proccess');

    $routes->get('/insurance', 'Insurance::index');

    // $routes->get('/client/add', 'Client::add_client');
    // $routes->post('/client/add', 'Client::add_client_process');
    // $routes->match(['get', 'post'], '/client/add', 'Client::add_client');

    $routes->get('/client', 'Client::index');
    $routes->get('/client/principal', 'Client::index');
    $routes->get('/client/principal/add', 'Client::principalAdd');
    $routes->get('/client/obligee', 'Client::obligee');

    $routes->get('/dashboard', 'Dashboard::index');

    $routes->get('/setting', 'Setting::index');

    $routes->get('/search', 'Search::index');

    $routes->get('/content/(:num)', 'Content::index/$1');
}

if (!function_exists('nl2space')) {
    function nl2space(string $str)
    {
        return trim(preg_replace('/\s\s+/', ' ', $str));
    }
}

if (!function_exists('nformat')) {
    function nformat($number, $decimal = 2)
    {
        return number_format(floatval($number), $decimal, ',', '.');
    }
}
