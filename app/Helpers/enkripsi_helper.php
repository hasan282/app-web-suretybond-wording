<?php

if (!function_exists('mmd5')) {
    /**
     * Hash to 32-char String with md5
     * @param string $text The String Input
     * @return string The Hash 32-character
     */
    function mmd5(string $text)
    {
        $md5 = md5($text);
        $text = 'EncRypT.tH1s.' . $text . '.t0.' . $md5 . 'w1tH.md5';
        return md5($text);
    }
}

if (!function_exists('sha3hash')) {
    /**
     * Hash a String with SHA3-256
     * @param string $text The String Input
     * @param int $length Result Length Max. 64
     * @return string The Hash String
     */
    function sha3hash(string $text, int $length = 32)
    {
        $key = md5('J4smine1ndah');
        $result = hash_hmac('sha3-256', $text, $key);
        $offset = floor((64 - $length) / 2);
        return substr($result, $offset, $length);
    }
}
