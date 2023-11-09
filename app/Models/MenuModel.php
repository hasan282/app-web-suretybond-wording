<?php

namespace App\Models;

use App\Models\BaseModel;

class MenuModel extends BaseModel
{
    public function getCompileData(int $accessID): array
    {
        $select = implode(', ', array(
            'menu_sub.id AS id',
            'menu_sub.text AS teks',
            'menu_sub.icon AS icon',
            'menu_sub.url AS url',
            'menus.id AS menu_id',
            'menus.text AS menu_teks',
            'menus.icon AS menu_icon'
        ));
        $this->select = $select;
        $table = 'menu_sub LEFT OUTER JOIN menus ON menu_sub.id_menu = menus.id';
        $this->table = '(' . $table . ') INNER JOIN menu_access ON menu_sub.id = menu_access.id_submenu';
        $this->where = 'menu_access.id_role = ' . $accessID;
        $this->order = 'menu_sub.id ASC';
        return $this->_compile($this->data());
    }

    private function _compile(array $data): array
    {
        $navigator = array();
        $menu = array();
        foreach ($data as $dt) {
            if ($dt['menu_id'] === null) {
                $navigator[] = $dt['id'];
                $menu[] = array(
                    'text' => $dt['teks'],
                    'icon' => $dt['icon'],
                    'url' => $dt['url']
                );
            } else {
                foreach ($navigator as $key => $nav) {
                    if ($nav == $dt['menu_id']) {
                        $menu[$key]['child'][] = array(
                            'text' => $dt['teks'],
                            'icon' => $dt['icon'],
                            'url' => $dt['url']
                        );
                        continue 2;
                    }
                }
                $navigator[] = $dt['menu_id'];
                $menu[] = array(
                    'text' => $dt['menu_teks'],
                    'icon' => $dt['menu_icon'],
                    'child' => array(
                        array(
                            'text' => $dt['teks'],
                            'icon' => $dt['icon'],
                            'url' => $dt['url']
                        )
                    )
                );
            }
        }
        return $menu;
    }
}
