<?php

	$_ROOT_SERVER_DIR = "/wet-boew";
	//$_ROOT_SERVER_DIR .= "-php";

		//override variables set in the dist config folder here to personalize the site
	$_DIST_CONFIG_LOC_ = $_ROOT_SERVER_DIR . "/dist-php/config/theme-gcwu-intranet/config.php";
	include $_SERVER['DOCUMENT_ROOT'] . $_DIST_CONFIG_LOC_;
		
	$_SITE['wb_site_href_eng'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 
	$_SITE['wb_site_href_fra'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 

	/*	Override variables in the dist-php config files here for the specific site */

	$_PAGE['custom_link1_href_eng'] = '#';
	$_PAGE['custom_link1_text_eng'] = 'Custom link';
	
	$_PAGE['custom_link2_href_eng'] = '#';
	$_PAGE['custom_link2_text_eng'] = 'Custom link';
	
	$_PAGE['custom_link3_href_eng'] = '#';
	$_PAGE['custom_link3_text_eng'] = 'Custom link';
?>