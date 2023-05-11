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

if (!function_exists('unformat')) {
    function unformat($number, string $separator = '.', string $decimal = ',')
    {
        $result = null;
        if (is_string($number) && $number !== null) {
            $numb = str_replace($separator, '', $number);
            $numb = str_replace($decimal, '.', $numb);
            if (preg_match('/^[0-9.]+$/i', $numb)) $result = $numb;
        }
        return $result;
    }
}

if (!function_exists('create_id')) {
    /** Format ID YYMMDDHHIISS (Length 12) ditambah Suffix Angka Random
     * @param int $suffix Length angka random
     * @return string ID yang dihasilkan.
     */
    function create_id(int $suffix = 4)
    {
        $suffix_value = '';
        if ($suffix > 0) {
            if ($suffix === 1) {
                $suffix_value .= mt_rand(0, 9);
            } else {
                $min = str_pad('1', $suffix, '0');
                $max = str_pad('9', $suffix, '9');
                $suffix_value .= mt_rand(intval($min), intval($max));
            }
        }
        return date('ymdHis') . $suffix_value;
    }
}

if (!function_exists('id2date')) {
}
