<?php  
namespace App\Model;

use PDO;
use App\Entity\Comment;

class CommentModel extends ModelAbstract
{
    /**
     * retourne un comment grâce à son identifiant
     * 
     * @param integer $id
     * @return void
     */
    public function findCommentsByIdPost(int $idPost)
    {
        $query = $this->pdo->prepare("SELECT * FROM comment WHERE id_post = :id_post");
        $query->execute(['id_post' => $idPost]);
        
        return $query->fetchAll(PDO::FETCH_CLASS, Comment::class);
    }

}