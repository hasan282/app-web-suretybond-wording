<?php

namespace App\Models;

use App\Models\BaseModel;

class ProfileModel extends BaseModel
{
    public function addNew(array $post = [], string $jaminan)
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 40);
    }

    public function applyProfile(string $jaminan, string $profile)
    {
        $this->select = '*';
        $this->table = 'prints';
        $check = $this->where(['jaminan' => $jaminan])->data();
        return $this->transaction(function ($db) use ($check, $jaminan, $profile) {
            if (empty($check)) {
                $db->table('prints')->insert(array(
                    'id_jaminan' => $jaminan,
                    'id_profile' => $profile
                ));
            } else {
                $db->table('prints')->update(
                    ['id_profile' => $profile],
                    ['id_jaminan' => $jaminan]
                );
            }
        });
    }

    public function getTable()
    {
    }

    public function getData(array $select = [], $joins = false)
    {
        $fields = array(
            'id' => 'print_profile.id AS id',
            'enkrip' => 'print_profile.enkripsi AS enkrip',
            'profile' => 'print_profile.profile AS profile',
            'paper' => 'print_profile.paper AS paper',
            'page_top' => 'print_profile.page_top AS page_top',
            'page_bottom' => 'print_profile.page_bottom AS page_bottom',
            'page_left' => 'print_profile.page_left AS page_left',
            'page_right' => 'print_profile.page_right AS page_right',
            'spacing' => 'print_profile.spacing AS spacing',
            'sign_margin' => 'print_profile.sign_margin AS sign_margin',
            'sign_width' => 'print_profile.sign_width AS sign_width',
            'sign_height' => 'print_profile.sign_height AS sign_height',
            'sign_space' => 'print_profile.sign_space AS sign_space'
        );
        $this->select($fields, $select);
        $table = 'print_profile';
        if ($joins) $table = '(' . $table . ' INNER JOIN prints ON prints.id_profile = print_profile.id) INNER JOIN jaminan ON jaminan.id = prints.id_jaminan';
        $this->table = $table;
        return $this;
    }

    public function listProfile()
    {
        $this->select = 'enkripsi, profile';
        $this->table = 'print_profile';
        $this->order = 'profile ASC';
        return $this;
    }

    // ----- PARENT OVERRIDE ------------------------------------------------------

    public function where($where, array $addField = [])
    {
        $fields = array(
            'enkrip' => 'print_profile.enkripsi',
            'enkrip_jaminan' => 'jaminan.enkripsi',
            'jaminan' => 'prints.id_jaminan'
        );
        if (!empty($addField)) $fields = array_merge($fields, $addField);
        return parent::where($where, $fields);
    }

    public function order($order, bool $isQuery = false, array $addOption = [])
    {
        $options = array(
            'profile' => 'print_profile.profile ASC'
        );
        if (!empty($addOption)) $options = array_merge($options, $addOption);
        return parent::order($order, $isQuery, $options);
    }
}
