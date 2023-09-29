<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    private function _callOthers()
    {
        $this->call('UserImage');
        $this->call('UserRole');
    }

    public function run()
    {
        $user = array(
            array(
                'id' => '220920151510',
                'username' => 'administrator',
                'nama' => 'Administrator',
                'id_image' => '2211210506015555',
                'id_office' => '221002065931',
                'id_role' => 101
            ),
            array(
                'id' => '221004141546',
                'username' => 'puja',
                'nama' => 'Putra Jalaksana',
                'id_image' => '2211210506015555',
                'id_office' => '221006204335',
                'id_role' => 301
            ),
            array(
                'id' => '221004152152',
                'username' => 'yolanda',
                'nama' => 'Yolanda Putri',
                'id_image' => '2211210607028888',
                'id_office' => '221002065931',
                'id_role' => 201
            ),
            array(
                'id' => '221229093111',
                'username' => 'mega',
                'nama' => 'Mega Islami',
                'id_image' => '2211210607028888',
                'id_office' => '221002065931',
                'id_role' => 201
            ),
            array(
                'id' => '221229093432',
                'username' => 'risky',
                'nama' => 'Risky Ramadhan',
                'id_image' => '2211210506015555',
                'id_office' => '221002065931',
                'id_role' => 201
            ),
            array(
                'id' => '221229094338',
                'username' => 'vina',
                'nama' => 'Vina Zakiatulwardah',
                'id_image' => '2211210607028888',
                'id_office' => '221002065931',
                'id_role' => 201
            ),
            array(
                'id' => '230216095440',
                'username' => 'lukman',
                'nama' => 'Lukman',
                'id_image' => '2211210506015555',
                'id_office' => '230103102409',
                'id_role' => 301
            ),
            array(
                'id' => '230302111306',
                'username' => 'kamal',
                'nama' => 'Kamal Mohammad',
                'id_image' => '2211210506015555',
                'id_office' => '221005104733',
                'id_role' => 301
            ),
            array(
                'id' => '230306082223',
                'username' => 'arlen',
                'nama' => 'Arlen',
                'id_image' => '2211210506015555',
                'id_office' => '230103102927',
                'id_role' => 301
            ),
            array(
                'id' => '230306082340',
                'username' => 'cucu',
                'nama' => 'Cucu Suherman',
                'id_image' => '2211210506015555',
                'id_office' => '230103102533',
                'id_role' => 301
            ),
            array(
                'id' => '230310143623',
                'username' => 'anugerah',
                'nama' => 'Anugrah Sakhi',
                'id_image' => '2211210506015555',
                'id_office' => '230103102323',
                'id_role' => 301
            ),
            array(
                'id' => '230310144019',
                'username' => 'iqbal',
                'nama' => 'Iqbal',
                'id_image' => '2211210506015555',
                'id_office' => '230103103058',
                'id_role' => 301
            ),
            array(
                'id' => '230310144257',
                'username' => 'limbers',
                'nama' => 'CV Lima Bersaudara',
                'id_image' => '2211210506015555',
                'id_office' => '221005053548',
                'id_role' => 301
            ),
            array(
                'id' => '230310144337',
                'username' => 'beyora',
                'nama' => 'Beyora',
                'id_image' => '2211210607028888',
                'id_office' => '221002145608',
                'id_role' => 301
            ),
            array(
                'id' => '230310144822',
                'username' => 'hasan',
                'nama' => 'Hasan',
                'id_image' => '2211210506015555',
                'id_office' => '230103102647',
                'id_role' => 301
            ),
            array(
                'id' => '230310144841',
                'username' => 'iman',
                'nama' => 'Iman',
                'id_image' => '2211210506015555',
                'id_office' => '230103102818',
                'id_role' => 301
            ),
            array(
                'id' => '230310150303',
                'username' => 'papua',
                'nama' => 'Papua',
                'id_image' => '2211210506015555',
                'id_office' => '230103102000',
                'id_role' => 301
            ),
            array(
                'id' => '230310150339',
                'username' => 'uurachmat',
                'nama' => 'Uu B. Soerachmat',
                'id_image' => '2211210506015555',
                'id_office' => '230203111645',
                'id_role' => 301
            ),
            array(
                'id' => '230310150403',
                'username' => 'yogi',
                'nama' => 'Yogi',
                'id_image' => '2211210506015555',
                'id_office' => '230103101804',
                'id_role' => 301
            ),
            array(
                'id' => '230310150505',
                'username' => 'lintas',
                'nama' => 'Lintas',
                'id_image' => '2211210506015555',
                'id_office' => '221001223026',
                'id_role' => 301
            ),
            array(
                'id' => '230310150936',
                'username' => 'hasan282',
                'nama' => 'Hasan Abdullah',
                'id_image' => '2211210506015555',
                'id_office' => '221002065931',
                'id_role' => 101
            ),
            array(
                'id' => '230509091732',
                'username' => 'jabidin',
                'nama' => 'Muhammad Jabidin',
                'id_image' => '2211210506015555',
                'id_office' => '221002065931',
                'id_role' => 201
            )
        );
        $data = $this->_user($user);
        $this->db->table('users')->insertBatch($data);
        $this->_callOthers();
    }

    private function _user(array $data): array
    {
        helper('enkripsi');
        $users = array();
        foreach ($data as $dt) {
            $users[] = array(
                'id' => $dt['id'],
                'enkripsi' => sha3hash($dt['id'], 50),
                'username' => $dt['username'],
                'password' => sha3hash('jasmine', 40),
                'nama' => $dt['nama'],
                'id_image' => $dt['id_image'],
                'id_office' => $dt['id_office'],
                'id_role' => $dt['id_role'],
                'actives' => 1
            );
        }
        return $users;
    }
}
