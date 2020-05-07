<!doctype html>
<html lang="en-us" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo (isset($this->title)) ? $this->title : '' ?></title>
	<meta name="author" content="Agência 7etti <contato@agencia7etti.com.br>">
	<meta name="description" content="Agência 7etti. Muito mais que uma agência! E por quê?!">
	<meta name="keywords" content="Agência, 7etti, publicidade, marketing, design, web, eventos">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="white">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_PATH.FAVICON ?>apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo BASE_PATH.FAVICON ?>android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_PATH.FAVICON ?>favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo BASE_PATH.FAVICON ?>favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_PATH.FAVICON ?>favicon-16x16.png">
	<link rel="manifest" href="<?php echo BASE_PATH.FAVICON ?>manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo BASE_PATH.FAVICON ?>ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php
		$detect = new Mobile_Detect();
		if ( !$detect->isMobile() ) {
	?>
		<link css-type="swiper" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
		<style><?php echo \App\Utils::getStyle('style.css') ?></style>
	<?php } else { ?>
		<style><?php echo \App\Utils::getStyle('mobile-style.css') ?></style>
	<?php } ?>
	<script><?php echo \App\Utils::getScript('lib/modernizr-2.8.3.min.js') ?></script>
</head>
<body class="<?php echo (isset($this->body)) ? $this->body : '' ?>">
<noscript>
	<p>
		This web application uses JavaScript. Please, <a href="http://www.enable-javascript.com/" target="_blank">enable it</a>.
	</p>
</noscript>
