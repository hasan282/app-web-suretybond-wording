<?php

namespace App\Models\BlankoApp;

use App\Models\Cores\BaseModel;
use Config\Database;

class BlankoModel extends BaseModel
{
    private array $config = array(
        'DSN'          => '',
        'hostname'     => 'localhost',
        'username'     => 'root',
        'password'     => '',
        'database'     => 'suretybond_blanko',
        'DBDriver'     => 'MySQLi',
        'DBPrefix'     => '',
        'pConnect'     => false,
        'DBDebug'      => true,
        'charset'      => 'utf8mb4',
        'DBCollat'     => 'utf8mb4_general_ci',
        'swapPre'      => '',
        'encrypt'      => false,
        'compress'     => false,
        'strictOn'     => false,
        'failover'     => [],
        'port'         => 3306,
        'numberNative' => false
    );

    public function __construct()
    {
        parent::__construct();
        $this->connect = Database::connect($this->config);
    }
}
