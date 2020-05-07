<?php

if (!defined('SYS_PATH') || !defined('BASE_PATH') || !defined('FINGERPRINT')) {
	die('Error: application is not set correctly');
}

$router = new \Core\Router();

$router->request('/', function() {
	$detect = new Mobile_Detect();

    $controller = ( $detect->isMobile() )
        ? new \App\Controllers\MobileController()
        : new \App\Controllers\IndexController();

    $controller->index();
});

$router->request('/ajax/contact', function() {
	$controller = new \App\Controllers\AjaxController();
	$controller->contact();
});

$router->response();
