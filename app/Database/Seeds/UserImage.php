<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserImage extends Seeder
{
    public function run()
    {
        $images = array(
            array(
                'id' => '2211210506015555',
                'name' => 'USER000M.jpg'
            ),
            array(
                'id' => '2211210607028888',
                'name' => 'USER000F.jpg'
            )
        );
        $data = $this->_images($images);
        $this->db->table('user_image')->insertBatch($data);
    }

    private function _images(array $data): array
    {
        helper('enkripsi');
        $image = array();
        foreach ($data as $dt) {
            $image[] = array(
                'id' => $dt['id'],
                'enkripsi' => sha3hash($dt['id'], 40),
                'image_name' => $dt['name'],
                'image_path' => 'image/user',
                'id_user' => '100010001000'
            );
        }
        return $image;
    }
}
