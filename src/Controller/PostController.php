<?php

namespace App\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use App\ModelAbstract;
use App\Model\PostModel;

final class PostController extends AbstractController {

	public function indexAction() {
		
		// Se connecter à la bdd 
		// Faire un select pour récupérer tous les articles et les affecter à la variable $posts


		$postModel = new PostModel();
		$posts = $postModel->findAll();
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
		$postModel = new PostModel();
		$post = $postModel->findById($idPost);
		//var_dump($_GET);
		//die();
		$this->render('post/show.html.twig', ['post' => $post]);
	}

	/**
	 * Ajoute un nouveau post
	 *
	 * @return string
	 */
	public function createAction() {
		return "Le create du controller postController";
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
