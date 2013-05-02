<?php

//always set the page language options first
$_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";


//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
//add PHP variants need to load a config file, choosing the /config/{theme}/config.php directory
//determines what them thist page will use.
require_once $path ."/config/theme-gcwu-fegc/config.php";


$_PAGE['title_fra'] = "Page d'entrée - Bilingue (eng-fra) - Thème de la facilité d'emploi Web GC - Exemples pratiques - Boîte à outils de l'expérience Web (BOEW)";

$_PAGE['short_title_eng'] = "Welcome";
$_PAGE['short_title_fra'] = "Bienvenue";

//get the path to the current folder this file resides in. 
$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'];
if(strtoupper(substr(PHP_OS, 0, 3)) == 'WIN') {
	//Backslashes are escape characters so on a winodws server
	//they need to be replaced with double backslash. For anyone
	//that hasn't see it before you have to escape the backslash
	//in regular expressions hence the \\\\\\\\\\\\\\\\\\\\\\\\\ below
	$_ROOT_PATH_ = preg_replace("(\\\)", "\\\\\\", $_ROOT_PATH_);
}
//Remove the server root path to make the path a nice URL relaitve path
$_PATH_ = preg_replace("(".$_ROOT_PATH_.")", "", realpath(dirname(__FILE__)));

if( strtoupper(substr(PHP_OS, 0, 3)) != 'WIN' ) {
	//linux server paths I think end with a forward slash
	//so the initial / is removed from the path in the preg_replace above
	//and is required to form the URL
	$_PATH_ = "/".$_PATH_;
}

$_SITE['wb_site_href_eng'] = $_PATH_ ."/index-eng.php";
$_SITE['wb_site_href_fra'] = $_PATH_ ."/index-fra.php";

$_PAGE['issplash'] = "1";

$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<meta name="description" lang="fr" content="French description / Description en français" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" lang="fr" content="French name of the content author / Nom en français de l'auteur du contenu" />
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>
<!-- CustomCSSStart -->
<!-- CustomCSSEnd -->
<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
?>
<!-- Main content start -->
<!-- no content needed for splash page -->
<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
