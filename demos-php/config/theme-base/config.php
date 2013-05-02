<?php

	//override variables set in the dist config folder here to personalize the site
	$_DIST_CONFIG_LOC_ = "/wet-boew-php/dist-php/config/theme-base/config.php";
	include $_SERVER['DOCUMENT_ROOT'] . $_DIST_CONFIG_LOC_;
	
	$_ROOT_SERVER_DIR = "/wet-boew";

	//enable if deployed from github. Comment out if demos deployed from zip file
	$_ROOT_SERVER_DIR .= "-php";
	
	$_SITE['wb_site_href_eng'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 
	$_SITE['wb_site_href_fra'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 

	/*	Override variables in the dist-php config files here for the specific site */

?>