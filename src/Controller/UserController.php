<?php

namespace App\Controller;

use Twig\Environment;
use App\ModelAbstract;
use App\Model\UserModel;
use App\Model\CommentModel;
use Twig\Loader\FilesystemLoader;
use App\Controller\AbstractController;

final class UserController extends AbstractController
{
	private $userModel;

    public function __construct() {
		$this->userModel = new UserModel();
    }

	/**
	 * Ajoute un nouveau user
	 *
	 * @return string
	 */
	public function createAction() {
		if(count($_POST) > 0) {	
			$firstname = $_POST["firstname"];
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			$this->userModel->createUser($firstname, $name, $email,$password);

			return "Le create du controller userController";
			} else {
				$this->render('user/newuser.html.twig');
			}
	}

	public function editUserAction() {

	}

	public function listUsersAction() {

	}

	public function showUserAction($userId) {

	}
	
}
