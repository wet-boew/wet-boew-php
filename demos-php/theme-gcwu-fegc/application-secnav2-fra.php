<?php

//always set the page language options first
$_PAGE['lang1'] = "fra";
$_PAGE['lang2'] = "eng";

//this is the only time the user needs to hard code the path, once the
//configuration file has been required all other paths can use the variables from that
//file. 
//
//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));
$_SLASH_ = "/";
$_CONFIG_PATH = substr($_PAGE_PATH_, 0, strrpos($_PAGE_PATH_, $_SLASH_)) . "/config" . substr($_PAGE_PATH_, strrpos($_PAGE_PATH_, $_SLASH_));
require_once $_CONFIG_PATH ."/config.php";



$_PAGE['title_fra'] = "Modèle pour applications - Menu secondaire 2 - Thème de la facilité d'emploi Web GC - Exemples pratiques - Boîte à outils de l'expérience Web&#160;(BOEW)";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['version'] = "1.1b";
$_PAGE['isapp'] = "1";

$$_PAGE_PATH_ = substr($_PAGE_PATH_, 0, strrpos($_PAGE_PATH_, $_SLASH_));
$_PAGE['left_menu_gauche'] = $_PAGE_PATH_ ."/menu-left-gauche/secnav2-fra.php";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="French description / Description en français" />
<meta name="dcterms.creator" content="French name of the content author / Nom en français de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="French subject terms / Termes de sujet en français" />
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

<?php include "includes/sample-application-".$_PAGE["lang1"].".php"; ?>

<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
