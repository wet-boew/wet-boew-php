<?php

	/* 
	 * Set only non-language specific variables in this file 
	 */
	
	//define the path to the wet core distribution folder
	$_SITE['wb_core_dist_folder'] = "/wet-boew-dist/dist";
	
	//define the path to the wet php distribution folder
	$_SITE['wb_php_dist_folder'] = "/wet-boew-php/dist-php";

	//modify this for you're specific site
	$_SITE['wb_site_title_fra'] = "Variante pour PHP"; 
	$_SITE['wb_site_href_fra'] = "home-accueil-fra.php"; 

	$_MENU_LOCATION_ = $_SERVER['DOCUMENT_ROOT'] . "/wet-boew-php/demos-php/menu";

	//modify to point to your sites search option
	$_SITE['wb_search_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/search.php";
	
	$_SITE['wb_bcrumb_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/bt_fa.php"; 

	//if $_PAGE['lang1'] is set assume the user set the languages
	//before including the config file. If so add only the required
	//configration files.
	if( isset($_PAGE['lang1']) ) {
		for( $i=1; isset($_PAGE['lang'.$i]); $i++ ) {
			include_once "config-" . $_PAGE['lang'.$i] .".php";
		}
	}
		
?>