<?php

define('SURETY_DOMAIN', 'https://suretyblanko.ptjis.id/');
define('SURETY_LOCALHOST', 'http://localhost/blanko/');
define('UPLOAD_PATH', FCPATH . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR);
define('REGISTER_SECTION', '{(register)}');

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
    $routes->post('/guarantee/add/(:hash)', 'Guarantee::phase2_process/$1');
    $routes->post('/guarantee/print/(:hash)', 'Guarantee::settings/$1');
    $routes->post('/guarantee/profile/apply', 'Guarantee::applySetting');
    $routes->post('/guarantee/profile/edit', 'Guarantee::editSetting');

    $routes->post('/blanko/used', 'Guarantee::blankoUse');
    $routes->post('/blanko/crash', 'Guarantee::blankoCrash');

    $routes->get('/inforce', 'Inforce::index');
    $routes->get('/inforce/request/(:hash)', 'Inforce::newRequest/$1');

    $routes->post('/inforce', 'Inforce::process');

    $routes->get('/client', 'Client::index');
    $routes->get('/client/add', 'Client::add');
    $routes->get('/client/detail/(:hash)', 'Client::detail/$1');

    $routes->post('/client/add', 'Client::addNew');
    $routes->post('/client/upload', 'Client::uploadFile');

    $routes->get('/insurance', 'Insurance::index');

    $routes->get('/dashboard', 'Dashboard::index');

    $routes->get('/setting', 'Setting::index');

    $routes->get('/search', 'Search::index');

    // --- JSON Table --------------------------------------------------------
    $routes->get('/tb/guarantee/(:segment)/(:num)', 'Guarantee::table/$1/$2');
    $routes->get('/tb/inforce/(:num)', 'Inforce::table/$1');
    $routes->get('/tb/client/(:num)', 'Client::table/$1');

    // --- JSON Data ---------------------------------------------------------
    $routes->get('/d/client/person/(:hash)', 'Client::people/$1');
    $routes->get('/d/insurance/(:hash)', 'Insurance::dataCabang/$1');
    $routes->get('/d/insurance/person/(:hash)', 'Insurance::dataPeople/$1');

    // --- JSON Views --------------------------------------------------------
    $routes->get('/v/client/(:hash)', 'Client::info/$1');
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
