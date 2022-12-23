<?php

namespace App\Model;

use PDO;

class ModelAbstract
{
    public ?PDO $database = null;

    public function connect(): PDO {
        if ($this->database === null) {
            $this->database = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        }

        return $this->database;
    }       
}
