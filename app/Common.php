<?php

define('SURETY_DOMAIN', 'https://surety.ptjis.com/');

function setAllRoutes($routes)
{
    $routes->get('/', 'Login::index');
    $routes->post('/', 'Auth::user');

    $routes->get('/user', 'User::index');
    $routes->get('/user/logout', 'Auth::logout');

    $routes->get('/guarantee', 'Guarantee::index');
    $routes->get('/guarantee/issued', 'Guarantee::index');
    $routes->get('/guarantee/detail/(:hash)', 'Guarantee::detail/$1');
    $routes->get('/guarantee/add', 'Guarantee::add_phase1');
    $routes->get('/guarantee/add/(:hash)', 'Guarantee::add_phase2/$1');
    $routes->get('/guarantee/print/(:hash)', 'Guarantee::print/$1');

    $routes->post('/guarantee/add', 'Guarantee::phase1_process');

    $routes->get('/client', 'Client::index');
    // $routes->get('/client/detail', 'Client::detail');
    $routes->get('/client/add', 'Client::add');
    $routes->post('/client/add', 'Client::addNew');

    $routes->get('/insurance', 'Insurance::index');

    $routes->get('/dashboard', 'Dashboard::index');

    $routes->get('/setting', 'Setting::index');

    $routes->get('/search', 'Search::index');

    // --- JSON Table --------------------------------------------------------
    $routes->get('/tb/guarantee/(:segment)/(:num)', 'Guarantee::table/$1/$2');
    $routes->get('/tb/client/(:num)', 'Client::table/$1');

    // --- JSON Data ---------------------------------------------------------
    $routes->get('/d/client/person/(:hash)', 'Client::people/$1');
    $routes->get('/d/insurance/(:hash)', 'Insurance::dataCabang/$1');
    $routes->get('/d/insurance/person/(:hash)', 'Insurance::dataPeople/$1');
}

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

if (!function_exists('nl2space')) {
    /** Replace semua New Line menjadi Spasi
     * @param string $str Content
     * @return string Content tanpa New Line
     */
    function nl2space(string $str)
    {
        return trim(preg_replace('/\s\s+/', ' ', $str));
    }
}
