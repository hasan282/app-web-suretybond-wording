<?php

namespace App\Controllers;

class Search extends BaseController
{
    public function index()
    {
        // if (!is_login())
        //     return login_page(full_url(false));
        // $data['title'] = 'Pencarian Data';
        // $this->plugin->setup('scrollbar');
        // $this->view('search/index', $data);

        $this->_export();
        // $this->_match();
    }

    private function _export()
    {
        if (!is_login())
            return login_page(full_url(false));
        $data['title'] = 'PDF';
        $this->plugin->setup('scrollbar|pdfmake');
        $this->view('guarantee/pdf');
    }

    private function _match()
    {
        $string = 'Lorem <bi>ipsum dolor</bi> sit amet, <span>consectetur adipisicing</span> elit. Tempora obcaecati ex pariatur, perspiciatis eos architecto odio harum, blanditiis, facilis quae nobis omnis aperiam <i>corporis fugiat asperiores</i> mollitia! Eum, natus odit';
        $result = array();
        preg_match_all('/<(.*)>(.*?)<\/\1>|([^<>]+)/', $string, $matches, PREG_SET_ORDER);
        foreach ($matches as $mc) {
            $style = array(
                'b' => 'bold',
                'i' => 'italics',
                'bi' => 'bolditalics'
            );
            if ($mc[1] == '') {
                $result[] = $mc[3];
            } elseif (array_key_exists($mc[1], $style)) {
                $result[] = array('text' => $mc[2], $style[$mc[1]] => true);
            } else {
                $result[] = $mc[0];
            }
        }
        var_dump($result);
    }
}
