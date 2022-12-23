<?php  

namespace App\Model;

use PDO;
use App\Entity\Post;

class PostModel 
{
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }

    function findAll() {
        $pdo = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        $statment = $pdo->prepare('SELECT * FROM post');
        $statment->execute([]);

        return $statment->fetchAll(PDO::FETCH_CLASS, Post::class);
    }

    public function findById($postId) {
        $statment = $this->pdo->prepare('SELECT * FROM post WHERE id = ?');
        $statment ->execute([$postId]);

        return $statment->fetchAll(PDO::FETCH_CLASS, Post::class)[0];
    }
}