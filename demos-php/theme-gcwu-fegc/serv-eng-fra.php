<?php

//always set the page language options first
$_PAGE['lang1'] = "eng";


//always set the page language options first
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
require_once $path ."/config.php";

//this is the only time the user needs to hard code the path, once the
//configuration file has been required all other paths can use the variables from that
//file. 
//
//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
require_once $path ."/config.php";


$_PAGE['lang2'] = "fra";

$_PAGE['title_eng'] = "Server message page - Bilingual (eng-fra) - GC Web Usability theme - Web Experience Toolkit (WET)";
$_PAGE['title_fra'] = "Page de message du serveur - Bilingue (eng-fra) - Thème de la facilité d'emploi Web GC - Exemples pratiques - Boîte à outils de l'expérience Web (BOEW)";

$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

$_PAGE['isserv'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->

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

<?php include "includes/sample-serv-".$_PAGE["lang1"]."-".$_PAGE["lang2"].".php"; ?>

<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
