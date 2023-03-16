<?php

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
    $routes->get('/admin', 'Home::admin');

    $routes->get('/guarantee', 'Guarantee::index');
    $routes->get('/guarantee/detail', 'Guarantee::detail');
    $routes->get('/guarantee/add', 'Guarantee::add');
    $routes->post('/guarantee/add', 'Guarantee::add_proccess');

    $routes->get('/insurance', 'Insurance::index');

    $routes->get('/client', 'Client::index');

    $routes->get('/dashboard', 'Dashboard::index');
}
