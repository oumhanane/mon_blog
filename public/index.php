<?php

use Oumha\MonBlog\Controller\HomeController;
use Oumha\MonBlog\Controller\PostController;
use Oumha\MonBlog\Controller\UserController;
use Oumha\MonBlog\Home;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$pathInfo = $_SERVER['PATH_INFO'];
$uri = $_SERVER['REQUEST_URI'];
// var_dump($pathInfo, $uri);

/**
 * route => /nomRoute?action=nomAction&id=entityId
 *
 * nomRoute => determine le controller à instanciser
 * action => determine l'action du controller à exécuter
 * id => determine l'entité sur lequel l'action doit être éxécuté
 *
 * Exemple:
 * 1. /posts?action=list
 * 1. /posts?action=show&id=1
 * 1. /posts?action=create
 * 1. /posts?action=edit&id=1
 * 1. /posts?action=delete&id=1
 */

// Gestion des routes
switch ($pathInfo) {
	case '/posts':
		$controller = new PostController();
		break;

	case '/users':
		$controller = new UserController();
		break;

	default:
		$controller = new HomeController();
		break;

}

// Gestion l'action à executer
if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else {
	$action = 'index';
}

$action = $action . 'Action';

if (method_exists($controller, $action)) {
	echo $controller->$action();
} else {
	// todo: lancer une exception
}

