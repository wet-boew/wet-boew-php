<?php
	/*
	 * Chose a theme:
	 * uncomment the one you want
	 */ 
	 $_SITE['wb_theme'] = "theme-base";

	//$_SITE['wb_php_root'] and $_SITE['wb_core_root'] are set in the following file
	/* **************************************
	 * The config-path.php file is intended to be used with the demos-php to
	 * simplify deployment to various webservers. Change the $_SITE['wb_php_root']
	 * and $_SITE['wb_core_root'] variables to point to the directory where
	 * the /dist-php and core /dist folders respectivly exist
	 * 
	 * DEV NOTE:
	 * my personal setup has the WET core themes at the root of the server so:
	 * /demos-php
	 * /dist-php
	 * /theme-base
	 * /theme-gcwu-fegc
	 * etc...
	 * 
	 * I've give the PHP distribution themes the same names as the core theme folders
	 */
	 $_SITE['wb_php_root'] = "wet-boew-php/";
	 $_SITE['wb_core_root'] = "/".$_SITE['wb_theme'];
	
	//include the standard distribution config with the default settings
	include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/dist-php/config/config.php";
	
	/*	Override variables from the dist-php config files here for the specific site */
	
	//modify to point to your sites search implementation
	$_SITE['wb_search_file'] = $_SITE['wb_php_root'] ."/demos-php/search/search.php";

	//enable if deployed from github. Comment out if demos deployed from zip file
	$_SITE['wb_site_href_en'] = $_SITE['wb_php_root'] . "/demos-php/index-en.php"; 
	$_SITE['wb_site_href_fr'] = $_SITE['wb_php_root'] . "/demos-php/index-fr.php"; 

	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	// ** This is the default language script set in the /dist-php/config/config.php file ** 
	//$_SITE['wb_cmblang_href_en'] = $_SITE['wb_cmblang_href_fr'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php";

	$_SITE['wb_terms_href_en'] = $_SITE['wb_core_dist_folder'] . "/License-en.html";
	$_SITE['wb_terms_href_fr'] = $_SITE['wb_core_dist_folder'] . "/Licence-fr.html";
	
?>