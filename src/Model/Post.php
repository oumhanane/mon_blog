<?php  
namespace App\Models;

class Post extends Model
{
    /**
     * retourne la liste des posts classés par date de création
     * 
     * @return array
     */
    public function findAllPosts(): array 
    {
        $pdo = connect();
        $resultats = $pdo->query('SELECT * FROM posts ORDER BY date_update DESC');
        $posts = $resultats->fetchAll();

        return $posts;
    }

    /**
     * retourne un post grâce à son identifiant
     * 
     * @param integer $id
     * @return void
     */
    public function findPost(int $id)
    {
        $pdo = connect();

        $query = $pdo->prepare("SELECT * FROM posts WHERE id = :post_id");

        $query->execute(['post_id' => $id]);

        $article = $query->fetch();

        return $article;
    }

    /**
     * supprime un post grâce à son identifiant
     * 
     * @param integer $id
     * @return void
     */
    public function deletePost(int $id): void 
    {
        $pdo = connect();
        $query = $pdo->prepare('DELETE FROM posts WHERE id = :id');
        $query->execute(['id => $id']);
    }
}