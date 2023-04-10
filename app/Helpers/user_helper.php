<?php

if (!function_exists('userdata')) {
    function userdata(?string $val = null)
    {
        if ($val === null) {
            $session = session()->get();
            $userdata = array_filter($session, function ($key) {
                return strpos($key, 'userdata_') === 0;
            }, ARRAY_FILTER_USE_KEY);
            if (!empty($userdata)) {
                $keys = array_map(function ($key) {
                    return substr($key, strlen('userdata_'));
                }, array_keys($userdata));
                $vals = array_values($userdata);
                $userdata = array_combine($keys, $vals);
            }
            return $userdata;
        } else {
            return session()->get('userdata_' . $val);
        }
    }
}

if (!function_exists('set_userdata')) {
    function set_userdata()
    {
    }
}
