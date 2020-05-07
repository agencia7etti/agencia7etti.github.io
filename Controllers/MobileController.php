<?php namespace App\Controllers;

use Core\Controller as MainController;

class MobileController extends MainController
{
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$view = $this->view();
		$view->title = 'Agência 7etti';
		$view->body = 'mobile';
		$view->render('mobile');
	}
}
