<?php

namespace App\Models;

use App\Models\BaseModel;

class ProfileModel extends BaseModel
{
    public function addNew(array $post = [], string $jaminan)
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 40);
        $data['profile'] = trim($post['profile_name'] ?? 'UNKNOWN');
        $data['paper'] = $post['paper'] ?? 'A4';
        $data['page_top'] = intval($post['page_top'] ?? '0');
        $data['page_bottom'] = intval($post['page_bottom'] ?? '0');
        $data['page_left'] = intval($post['page_left'] ?? '0');
        $data['page_right'] = intval($post['page_right'] ?? '0');
        $data['spacing'] = intval($post['spacing'] ?? '100');
        $data['sign_margin'] = intval($post['sign_margin'] ?? '0');
        $data['sign_space'] = intval($post['sign_space'] ?? '0');
        $data['sign_width'] = intval($post['sign_width'] ?? '0');
        $data['sign_height'] = intval($post['sign_height'] ?? '0');
        $this->select = '*';
        $this->table = 'prints';
        $check = $this->where(['jaminan' => $jaminan])->data();
        return $this->transaction(function ($db) use ($check, $jaminan, $data) {
            if (empty($check)) {
                $db->table('prints')->insert(array(
                    'id_jaminan' => $jaminan,
                    'id_profile' => $data['id']
                ));
            } else {
                $db->table('prints')->update(
                    ['id_profile' => $data['id']],
                    ['id_jaminan' => $jaminan]
                );
            }
            $db->table('print_profile')->insert($data);
        });
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
        $this->select = '*';
        $this->table = 'print_profile';
        return $this;
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
