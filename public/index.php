<?php

use App\Controller\HomeController;
use App\Controller\PostController;
use App\Controller\UserController;
use App\Home;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

// $pathInfo = $_SERVER['PATH_INFO'];
$uri = $_SERVER['REQUEST_URI'];
// var_dump($_SERVER);
// die();

/**
 * route => /nomRoute?action=nomAction&id=entityId
 *
 * nomRoute => determine le controller à instancier
 * action => determine l'action du controller à exécuter
 * id => determine l'entité sur laquelle l'action doit être éxécutée 
 *
 * Exemple:
 * 1. /posts?action=list              ['action' => 'list']
 * 1. /posts?action=show&id=1         ['action' => 'show', 'id' => 1]
 * 1. /posts?action=create            ['action' => 'create']
 * 1. /posts?action=edit&id=1         ['action' => 'edit', 'id' => 1]
 * 1. /posts?action=delete&id=1       ['action' => 'delete', 'id' => 1]
 */

// Gestion des routes
$uri = explode('?',$uri)[0];

switch ($uri) {
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
// var_dump($controller, $action);
// die();
if (method_exists($controller, $action)) {
	echo $controller->$action();
} else {
	// todo: lancer une exception
}

