<?php
namespace App\Models;

abstract class Model 
{
    protected $pdo;

    public function __construct()
    {
    $this->pdo = connect();
    }
}
