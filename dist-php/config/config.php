<?php

	/*
	 * Add all of the default variables that may be null to prevent PHP warnings 
	 * and errors for undefined values
	 */
	$_PAGE['issplash'] = (!isset($_PAGE['issplash']) ? 0 : $_PAGE['issplash']);
	$_PAGE['isapp'] = (!isset($_PAGE['isapp']) ? 0 : $_PAGE['isapp']);
	$_PAGE['isserv'] = (!isset($_PAGE['isserv']) ? 0 : $_PAGE['isserv']);
	$_PAGE['signin'] = (!isset($_PAGE['signin']) ? 0 : $_PAGE['signin']);
	$_PAGE['signout'] = (!isset($_PAGE['signout']) ? 0 : $_PAGE['signout']);
	$_META_LANG = (!isset($_META_LANG) ? '' : $_META_LANG); // for head-end.php
	$_META_LANG_ = (!isset($_META_LANG_) ? '' : $_META_LANG_); // for head-doc.php
	$_PAGE['nolang'] = (!isset($_PAGE['nolang']) ? 0 : $_PAGE['nolang']);
	$_PAGE['nosearch'] = (!isset($_PAGE['nosearch']) ? 0 : $_PAGE['nosearch']);
	$_PAGE['nositemenu'] = (!isset($_PAGE['nositemenu']) ? 0 : $_PAGE['nositemenu']);
	$_PAGE['nobcrumb'] = (!isset($_PAGE['nobcrumb']) ? 0 : $_PAGE['nobcrumb']);
	$_PAGE['isarchived'] = (!isset($_PAGE['isarchived']) ? 0 : $_PAGE['isarchived']);
	 	 
	/* 
	 * Set only non-language specific variables in this file 
	 */
		
	/*
	 * Define the path to the wet core distribution folder. For development from
	 * github the deploy folder is /wet-boew-dist and the php deploy folder is 
	 * /wet-boew-php. 
	 *
	 * For deployment from a zip file where the demos-php, dist-php and dist
	 * folders are copied into a directory at the root of the webserver Comment 
	 * out or remove these lines.
	 */
	
	$_SITE['wb_core_dist_folder'] = $_SITE['wb_core_root'] . "/dist";
	
	//define the path to the wet php distribution folder
	//for development the deploy folder is /wet-boew-php
	$_SITE['wb_php_dist_folder'] = $_SITE['wb_php_root'] . "/dist-php";
	
	//define the locations of the demo menus
	$_MENU_LOCATION_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/demos-php/menu";

	//modify in a custom config to point to your sites search implementation
	$_SITE['wb_search_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/demos-php/search" . $_SITE['wb_theme_folder'] ."/search.php";
	
	//modify to point to yours sites bread crumb implementation
	$_SITE['wb_bcrumb_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/bt_fa.php"; 

	$_SITE['wb_archive_warn_icon'] = $_SITE['wb_core_dist_folder']."/js/images/archived/warning.gif";
	
	//if $_PAGE['lang1'] is set assume the user set the languages
	//before including the config file. If so add only the required
	//configration files.
	if( isset($_PAGE['lang1']) ) {
		for( $i=1; isset($_PAGE['lang'.$i]); $i++ ) {
			include_once "config-" . $_PAGE['lang'.$i] .".php";
		}
	}
		
?>