<?php
	
	/*
	 * Add all of the default variables that may be null to prevent PHP warnings 
	 * and errors for undefined values
	 */
	$_PAGE['iserror'] = (!isset($_PAGE['iserror']) ? 0 : $_PAGE['iserror']);
	$_PAGE['issplash'] = (!isset($_PAGE['issplash']) ? 0 : $_PAGE['issplash']);
	$_PAGE['isapp'] = (!isset($_PAGE['isapp']) ? 0 : $_PAGE['isapp']);
	$_PAGE['isserv'] = (!isset($_PAGE['isserv']) ? 0 : $_PAGE['isserv']);
	$_PAGE['signin'] = (!isset($_PAGE['signin']) ? 0 : $_PAGE['signin']);
	$_PAGE['signout'] = (!isset($_PAGE['signout']) ? 0 : $_PAGE['signout']);
	$_PAGE['nolang'] = (!isset($_PAGE['nolang']) ? 0 : $_PAGE['nolang']);
	$_PAGE['nosearch'] = (!isset($_PAGE['nosearch']) ? 0 : $_PAGE['nosearch']);
	$_PAGE['nositemenu'] = (!isset($_PAGE['nositemenu']) ? 0 : $_PAGE['nositemenu']);
	$_PAGE['nobcrumb'] = (!isset($_PAGE['nobcrumb']) ? 0 : $_PAGE['nobcrumb']);
	$_PAGE['isarchived'] = (!isset($_PAGE['isarchived']) ? 0 : $_PAGE['isarchived']);
	$_PAGE['bodytag'] = (!isset($_PAGE['bodytag']) ? '' : $_PAGE['bodytag']);

	/*
	 * Define the path to the wet core distribution folder. For development from
	 * github the deploy folder is /wet-boew-dist and the php deploy folder is 
	 * /wet-boew-php. 
	 *
	 * For deployment from a zip file where the demos-php, dist-php and dist
	 * folders are copied into a directory at the root of the webserver Comment 
	 * out or remove these lines.
	 */
	
	if( !isset($_SITE['wb_core_dist_folder']) ) {
		$_SITE['wb_core_dist_folder'] = $_SITE['wb_core_root'];
	}
	
	//define the path to the wet php distribution folder
	//for development the deploy folder is /wet-boew-php
	if( !isset($_SITE['wb_php_dist_folder']) ) {
		$_SITE['wb_php_dist_folder'] = $_SITE['wb_php_root'] . "dist-php";
	}
	
	//define the locations of the demo menus
	$_MENU_LOCATION_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/demos-php/menu";

	//modify in a custom config to point to your sites search implementation
	$_SITE['wb_search_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/demos-php/search/search.php";
	
	//modify to point to yours sites bread crumb implementation
	$_SITE['wb_bcrumb_file'] = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/breadcrumb-generator.php"; 

	//include the theme specific configureation
	include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] .'/config/'.$_SITE['wb_theme'].'/config.php';

	//if $_PAGE['lang1'] is set assume the user set the languages
	//before including the config file. If so add only the required
	//configration files.
	if( isset($_PAGE['lang1']) ) {
		for( $i=1; isset($_PAGE['lang'.$i]); $i++ ) {
			include_once "config-" . $_PAGE['lang'.$i] .".php";
		}
	}
	
	//Modify the language selection link to point to whatever script suits your site.
	$_SITE['wb_cmblang_href_en'] = $_SITE['wb_cmblang_href_fr'] = "/" .$_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 		
?>