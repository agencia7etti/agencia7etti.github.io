<?php namespace App\Controllers;

use Core\Controller as MainController;

class ErrorController extends MainController
{
	public function __construct() {
		parent::__construct();
	}
	
	public function error404() {
		$view = $this->view();
		$view->title = '404';
		$view->body = '404';
		$view->render('404');
	}

	public function fileDoesNotExist($param) {
		die('Rendering process failed => ' . $param . ' does not exist');
	}
}
