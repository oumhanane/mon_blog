<?php

namespace Oumha\MonBlog\Controller;

final class PostController {
	public function indexAction() {
		return "L'index du controller postController";
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
