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
    $routes->get('/guarantee/add', 'Guarantee::add');

    $routes->post('/guarantee/print', 'Guarantee::add_margin');
    $routes->post('/guarantee/print', 'Guarantee::add_width');
    $routes->post('/guarantee/add', 'Guarantee::add_proccess');

    $routes->get('/insurance', 'Insurance::index');

    $routes->get('/client', 'Client::index');
    $routes->get('/client/add', 'Client::add');

    $routes->get('/dashboard', 'Dashboard::index');

    $routes->get('/setting', 'Setting::index');

    $routes->get('/search', 'Search::index');

    $routes->get('/content/(:num)', 'Content::index/$1');
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

if (!function_exists('nformat')) {
    /** Format Angka dengan Separator
     * @param string|int|float $number Value
     * @param int $decimal Jumlah Angka dibelakang Koma
     * @param bool $reverse Kebalikan dari Format Internasional
     * @return string Angka yang diformat
     */
    function nformat($number, int $decimal = 2, bool $reverse = true)
    {
        $result = null;
        if (!is_array($number) && !is_object($number)) {
            $separator = array(',', '.');
            if ($reverse) $separator = array('.', ',');
            $result = number_format(floatval($number), $decimal, $separator[1], $separator[0]);
        }
        return $result;
    }
}
