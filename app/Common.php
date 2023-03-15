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

    $routes->get('/guarantee', 'Guarantee::draft');
    $routes->get('/guarantee/issued', 'Guarantee::issued');
    $routes->get('/guarantee/detail', 'Guarantee::detail');

    $routes->get('/insurance', 'Insurance::index');

    $routes->get('/client', 'Client::index');

    $routes->get('/dashboard', 'Dashboard::index');

    $routes->get('/setting', 'Setting::index');

    $routes->get('/search', 'Search::index');
}
