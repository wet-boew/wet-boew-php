<?php

	$_PHP_THEME_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'];
	
	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['gcwu_sig_image'].'-' . $_PAGE['lang1'];
	$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

	$_WMMS_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms';
	$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
	
	//if this is a server page use the server navigation head
	$_NAVIGATION_FILE_ =  $_PHP_THEME_PATH_ . "/head-nav-reg.php";
	if( $_PAGE['isserv'] == "1" ) {
		$_NAVIGATION_FILE_ = $_PHP_THEME_PATH_ . "/head-nav-serv.php";
	} else if( $_PAGE['issplash'] == "1" ) {
		$_NAVIGATION_FILE_ = $_PHP_THEME_PATH_ . "/head-nav-sp.php";
	}
	
	include_once $_NAVIGATION_FILE_;
?>