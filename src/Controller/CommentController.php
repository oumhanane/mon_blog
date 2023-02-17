<?php  
namespace App\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

final class CommentController extends AbstractController
{
    
	/**
	 * Affiche un comment
	 *
	 * @return string
	 */
	public function showAction() {
		$idComment = $_GET['id'];
		$commentModel = new CommentModel();
		$comment = $commentModel->findById($idComment);

		//instancier le CommentModel et appeler la méthode findCommentsByPostId($idPost)
		//afficher les commentaires dans la vue

		//var_dump($_GET);
		//die();
		$this->render('comment/show.html.twig', ['comment' => $comment]);
	}
}