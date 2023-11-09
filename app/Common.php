<?php

define('SURETY_DOMAIN', 'https://suretyblanko.ptjis.id/');
define('SURETY_LOCALHOST', 'http://localhost:8074/suretybond-blanko/');
define('UPLOAD_PATH', FCPATH . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR);
define('REGISTER_SECTION', '{(register)}');

if (!function_exists('env_is')) {
    /** Cek Environment saat ini
     * @param string $env tipe environtment
     */
    function env_is(string $env): bool
    {
        $environtment = getenv('CI_ENVIRONMENT') ?: 'production';
        return ($env == $environtment);
    }
}

if (!function_exists('nl2space')) {
    /** Replace semua New Line menjadi Spasi
     * @param null|string $str Content
     * @param bool $toSpace Jadikan false jika ingin tanpa spasi
     * @return string Content tanpa New Line
     */
    function nl2space(?string $str, bool $toSpace = true): string
    {
        $string = '' . $str;
        $replacer = $toSpace ? ' ' : '';
        return trim(preg_replace('/\s+/', $replacer, $string));
    }
}

if (!function_exists('tooltip')) {
    function tooltip(string $selector = '.show-tooltip'): string
    {
        return "$('" . $selector . "').tooltip({placement:'top',trigger:'hover'});";
    }
}
