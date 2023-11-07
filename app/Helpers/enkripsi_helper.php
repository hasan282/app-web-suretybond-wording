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
        $chars = $length < 64 ? $length : 64;
        $offset = $chars < (64 - 1) ? floor((64 - $chars) / 2) : 0;
        $key = md5('J4smine1ndah');
        $result = hash_hmac('sha3-256', $text, $key);
        return substr($result, $offset, $chars);
    }
}

if (!function_exists('myhash')) {
    function myhash(string $text, bool $randomize = false, ?string $key = null): string
    {
        $alpha = str_split('0123456789abcdefghijklmnopqrstuvwxyz');
        $beta = str_split('aAbB1cCdD2eEfF3gGhH4ijJ5kKL6mMnN7opP8qQrR9sStT0uUvVwWxXyYzZ');
        $hashkey = md5($key ?? 'J4smine1ndah');
        $shahash = hash_hmac('sha3-256', $text, $hashkey);
        $splithash = array_map(function ($val) use ($alpha) {
            return array_search($val, $alpha);
        }, str_split($shahash));
        $splitkey = array_map(function ($val) use ($alpha) {
            return array_search($val, $alpha);
        }, str_split($hashkey));
        $combine = array();
        for ($com = 0; $com < (sizeof($splithash) / 2); $com++) {
            $combine1 = $splithash[$com];
            $combine2 = $splithash[($com + (sizeof($splithash) / 2))];
            $combine[] = $combine1 + $combine2 + $splitkey[$com];
        }
        $newhash = '';
        foreach ($combine as $cm) {
            $key = $cm > (sizeof($beta) - 1) ? $cm - sizeof($beta) : $cm;
            if ($randomize)
                $key = $cm < 5 ? mt_rand($cm, (sizeof($beta) - 1)) : mt_rand(0, $cm);
            $newhash = $newhash . $beta[$key];
        }
        return $newhash;
    }
}
