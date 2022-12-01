<?php

namespace App\Controller;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

final class PostController extends AbstractController {

	public function indexAction() {
        $posts = [
            [
                "id" => 1,
                "title" => "Titre1",
                "author" => "auteur1",
				"content" => "content1",
				"date_update" => "Créé le",
            ],[
                "id" => 2,
                "title" => "Titre2",
                "author" => "auteur2",
				"content" => "content1",
				"date_update" => "Créé le",
            ],[
                "id" => 3,
                "title" => "Titre3",
                "author" => "auteur3",
				"content" => "content1",
				"date_update" => "Créé le",
            ],
        ];

        $this->render('post/index.html.twig', ['posts' => $posts]);

	}

	/**
	 * Renvoi la liste des posts
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
		return "Le show du controller postController";
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
