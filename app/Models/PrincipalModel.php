<?php

namespace App\Models;

use App\Models\BaseModel;

class PrincipalModel extends BaseModel
{
    public function addNew(array $post = [], ?string $office = null)
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 50);
        $data['nama'] = strtoupper(trim($post['principal'] ?? ''));
        $data['telpon'] = trim($post['telpon'] ?? '');
        $data['email'] = trim($post['email'] ?? '');
        $data['alamat'] = trim(nl2space($post['alamat'] ?? ''));
        if ($office !== null) $data['id_office'] = $office;
        $data['actives'] = 1;
        foreach ($data as $k => $v) if ($v == '') unset($data[$k]);
        $insert = $this->transaction(function ($db) use ($data, $post) {
            $db->table('principal')->insert($data);
            $db->table('principal_people')->insert($this->_peopleData($data['id'], $post));
        });
        return $insert;
    }

    private function _peopleData(string $principal, $post = [])
    {
        $data['id'] = create_id();
        $data['enkripsi'] = sha3hash($data['id'], 50);
        $data['id_principal'] = $principal;
        $data['nama'] = trim($post['pejabat'] ?? '');
        $data['jabatan'] = trim($post['jabatan'] ?? '');
        $data['actives'] = 1;
        foreach ($data as $k => $v) if ($v == '') unset($data[$k]);
        return $data;
    }
}
