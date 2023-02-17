<?php

namespace App\Controller;

use Twig\Environment;
use App\ModelAbstract;
use App\Model\PostModel;
use App\Model\CommentModel;
use Twig\Loader\FilesystemLoader;
use App\Controller\AbstractController;

final class PostController extends AbstractController {

	/**
	 * @var PostModel;
	 */
	private $postModel;
	private $commentModel;

	public function __construct() {
		$this->postModel = new PostModel();
		$this->commentModel = new CommentModel();	
	}

	public function indexAction() {
		
		// Se connecter à la bdd 
		// Faire un select pour récupérer tous les articles et les affecter à la variable $posts

		$posts = $this->postModel->findAll();
		// var_dump($posts);
		// die();
        $this->render('post/index.html.twig', ['posts' => $posts]);
	}

	/**
	 * Récupération des posts
	 */


	/**
	 * Renvoi la liste des posts
	 *
	 * @return string
	 */
	public function listAction() {

		return "La list du controller postController";
	}

	/**
	 * Affiche un post
	 *
	 * @return string
	 */
	public function showAction() {
		$idPost = $_GET['id'];
		$post = $this->postModel->findById($idPost);
		$comments = $this->commentModel->findCommentsByIdPost($idPost);

		//instancier le CommentModel et appeler la méthode findCommentsByIdPost($idPost)
		//afficher les commentaires dans la vue

		$this->render('post/show.html.twig', ['post' => $post, 'comments' => $comments]);
	}

	/**
	 * Ajoute un nouveau post
	 *
	 * @return string
	 */
	public function createAction() {
		if(count($_POST) > 0) {			
			$title = $_POST["title"];
			$chapo = $_POST["chapo"];
			$content = $_POST["content"];
			$author = $_POST["author"];
			$created_at = $_POST["created_at"];
			$this->postModel->createPost($title, $chapo, $content, $author, $created_at);
			
			return "Le create du controller postController";
		} else {
			$this->render('post/newpost.html.twig');
		}
	}

	/**
	 * Modifier un post
	 *
	 * @return string
	 */
	public function editAction() {
		return "L'edit du controller postController";
	}

	/**
	 * Supprimer un post
	 *
	 * @return string
	 */
	public function deleteAction($postId = null) {
		return "Le delete du controller postController";
	}

}
