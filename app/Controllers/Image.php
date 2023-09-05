<?php

namespace App\Controllers;

class Image extends BaseController
{
    public function index($hash)
    {
        var_dump($hash);
    }

    public function show_pattern($mode)
    {
        $modes = array('light', 'dark');
        $imgName = 'pattern_two_' . $mode . '.jpg';
        $path = FCPATH . 'image' . DIRECTORY_SEPARATOR . 'content' . DIRECTORY_SEPARATOR . 'patterns' . DIRECTORY_SEPARATOR . $imgName;
        if (!file_exists($path) || !in_array($mode, $modes)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $mime = mime_content_type($path);
        header('Content-Type: ' . $mime);
        readfile($path);
    }
}
