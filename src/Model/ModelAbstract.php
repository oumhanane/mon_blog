<?php

namespace App\Model;

use PDO;

abstract class ModelAbstract
{
    protected $pdo;

    public function __construct() {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }

}
