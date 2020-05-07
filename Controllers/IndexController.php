<?php namespace App\Controllers;

use Core\Controller as MainController;

class IndexController extends MainController
{
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$view = $this->view();
		$view->title = 'Agência 7etti';
		$view->body = 'index';
		$view->render('index');
	}
}
