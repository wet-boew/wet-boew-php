<?php

	/**********************************************************
	 * The following is used specifically by the PHP variant demos to simplify
	 * deployment. Distribution paths are set in the config-path.php file
	 * in the /demos-php/config/ directory.
	 * 
	 */
	 
	//determine what slash should be used. Back for windows forward for Linux
	$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
	$_CONF_PATH_ = realpath(dirname(__FILE__));
	$_CONF_PATH_ = substr($_CONF_PATH_, 0, strrpos($_CONF_PATH_, $_SLASH_));

	//$_SITE['wb_php_root'] and $_SITE['wb_core_root'] are set in the following file
	include $_CONF_PATH_ ."/config-path.php";
	/*******  END OF DEMO PATH INCLUSION **********/
	
	//include the core the dist config folder here
	$_DIST_CONFIG_LOC_ = $_SITE['wb_php_root'] . "/dist-php/config/theme-gcwu-fegc/config.php";
	include $_SERVER['DOCUMENT_ROOT'] . $_DIST_CONFIG_LOC_;
	
	/*	Override variables from the core dist-php config files here for the specific site */
	
	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	$_SITE['gcwu_cmblang_href_eng'] = $_SITE['gcwu_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//modify to point to your sites search implementation
	$_SITE['wb_search_file'] = $_SITE['wb_php_root'] ."/demos-php/search" . $_SITE['wb_theme_folder'] ."/search.php";

	//Modify the location of the sites root splash page
	$_SITE['wb_site_href_eng'] = $_SITE['wb_php_root'] ."/demos-php/index.php"; 
	$_SITE['wb_site_href_fra'] = $_SITE['wb_php_root'] ."/demos-php/index.php"; 

	//Modify Terms and conditions links
	$_SITE['gcwu_terms_href_eng'] = "#"; 
	$_SITE['gcwu_terms_href_fra'] = "#"; 

	//Modify Transparency links
	$_SITE['gcwu_trans_href_eng'] = "#"; 
	$_SITE['gcwu_trans_href_fra'] = "#"; 
	
?>