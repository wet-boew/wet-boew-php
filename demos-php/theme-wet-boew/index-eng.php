<?php

//always set the page language options first
//set 'lang1' to 'eng' for English pages, 'fra' for French pages
$_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));
//if this is a windows machine use the backslash, otherwise use forwardslash
$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
$_CONFIG_PATH = substr($_PAGE_PATH_, 0, strrpos($_PAGE_PATH_, $_SLASH_)) . "/config" . substr($_PAGE_PATH_, strrpos($_PAGE_PATH_, $_SLASH_));
require_once $_CONFIG_PATH ."/config.php";

/* These are the required variables fore each page */
$_PAGE['title_' . $_PAGE['lang1']] = "WET theme";
$_PAGE['issued'] = "2013-05-01";
$_PAGE['modified'] = "2013-05-01";

/* This is a list of optional variables 

// Set the short title for the page to be displayed just above the main content
// if not set then the required $_PAGE['title_' . $_PAGE['lang1']] above will be used
$_PAGE['short_title_' . $_PAGE['lang1']] = "";

// Set the alternate short title for the page to be displayed just above the main content
$_PAGE['short_title_' . $_PAGE['lang2']] = "";

// Set 'isapp' to one to use the application template. If this is an application use
// the 'version' variable, which is displayed at the bottom of the content area
// instead of the Date Modified
$_PAGE['isapp'] = "1";
$_PAGE['version'] = "";

//set 'issplash' to one to use the splash page
$_PAGE['issplash'] = "1";

//set 'isserv' to one to use the server template
$_PAGE['isserv'] = "1";

*
 *	Pointing 'left_gauche_menu_eng' or 'left_gauche_menu_fra' to a
 *	file will use that file as the left side menu (secondary navigation)
 *	and make this page a two column layout automaticlly. 
 *
$_PAGE['left_gauche_menu_eng'] = $_SERVER['DOCUMENT_ROOT'] . "/demos-php/menu-left-gauche/secnav1-eng.php";

//Possible options for languages
$_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";
$_PAGE['lang3'] = "deu";
$_PAGE['lang4'] = "spa";
$_PAGE['lang5'] = "ita";
$_PAGE['lang6'] = "por";
$_PAGE['lang7'] = "rus";

****************************************/
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>
<!-- CustomCSSStart -->
<style>
.languages-examples li {
	float: left;
	width: 50%;
}
</style>
<!-- CustomCSSEnd -->
<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
?>
<!-- Main content start -->
<?php 
include "includes/index-eng.php";
?>
<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>