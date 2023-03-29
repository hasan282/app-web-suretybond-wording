<?php

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
