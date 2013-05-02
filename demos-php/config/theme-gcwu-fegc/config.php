<?php

	$_ROOT_SERVER_DIR = "/wet-boew";
	//$_ROOT_SERVER_DIR .= "-php";

		//override variables set in the dist config folder here to personalize the site
	$_DIST_CONFIG_LOC_ = $_ROOT_SERVER_DIR . "/dist-php/config/theme-gcwu-fegc/config.php";
	include $_SERVER['DOCUMENT_ROOT'] . $_DIST_CONFIG_LOC_;
	
	/*	Override variables in the dist-php config files here for the specific site */
	
	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	$_SITE['gcwu_cmblang_href_eng'] = $_SITE['gcwu_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//Modify the location of the sites root splash page
	$_SITE['wb_site_href_eng'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 
	$_SITE['wb_site_href_fra'] = $_ROOT_SERVER_DIR . "/demos-php/index.php"; 

	//Modify Terms and conditions links
	$_SITE['gcwu_terms_href_eng'] = "#"; 
	$_SITE['gcwu_terms_href_fra'] = "#"; 

	//Modify Transparency links
	$_SITE['gcwu_trans_href_eng'] = "#"; 
	$_SITE['gcwu_trans_href_fra'] = "#"; 
	
?>