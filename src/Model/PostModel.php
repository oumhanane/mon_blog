<?php  

namespace App\Model;

use PDO;
use App\Entity\Post;

class PostModel extends ModelAbstract
{
    
    function findAll() {
        $statment = $this->pdo->prepare('SELECT * FROM post');
        $statment->execute([]);

        return $statment->fetchAll(PDO::FETCH_CLASS, Post::class);
    }

    public function findById($postId) {
        $statment = $this->pdo->prepare('SELECT * FROM post WHERE id = ?');
        $statment ->execute([$postId]);

        return $statment->fetchAll(PDO::FETCH_CLASS, Post::class)[0];
    }

    public function createPost($title, $chapo, $content, $author, $created_at) {
        // Préparation de la requête d'insertion
        $stmt = $this->pdo->prepare("INSERT INTO post (title, chapo, content, author, created_at, id_user) VALUES (:title, :chapo, :content, :author, :created_at, 1)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':chapo', $chapo);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':created_at', $created_at);

        // Exécution de la requête
        $stmt->execute();

    }       
}