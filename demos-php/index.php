<?php

//always set the page language options first
$_PAGE['lang1'] = "en";
$_PAGE['lang2'] = "fr";


//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
//add PHP variants need to load a config file, choosing the /config/{theme}/config.php directory
//determines what them thist page will use.
require_once $path ."/config/config.php";

$_PAGE['title_en'] = "Welcome";
$_PAGE['title_fr'] = "Bienvenue";

$_PAGE['sub_title_en'] = "Web Experience Toolkit";
$_PAGE['sub_title_fr'] = "Boîte à outils de l’expérience Web";

$_SITE['wb_site_href_en'] = "/" .$_SITE['wb_php_root'] . "demos-php/" .$_SITE["wb_theme"] ."/index-en.php";
$_SITE['wb_site_href_fr'] = "/" .$_SITE['wb_php_root'] . "demos-php/" .$_SITE["wb_theme"] ."/index-fr.php";

$_PAGE['issplash'] = "1";

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
<?php
//There are different ways to display the content based on what theme is currently chosen
//so I've put the main content in the demos-php/includes folder under the theme it belongs to
include $_SERVER['DOCUMENT_ROOT'] .$_SITE['wb_php_root'] . "demos-php/" .$_SITE["wb_theme"] ."/includes/index.php"
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
