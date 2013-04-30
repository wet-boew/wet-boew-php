<?php
//this is the only time the user needs to hard code the path, once the
//configuration file has been required all other paths can use the variables from that
//file. 
require_once $_SERVER['DOCUMENT_ROOT'] . "/demos-php/theme-gcwu-fegc/config.php";

$_PAGE['lang1'] = "fra";
$_PAGE['title_fra'] = "Modèle pour applications - Sans recherche, lien de sélection de la langue, menu du site ou fil d'Ariane - Thème de la facilité d'emploi Web GC - Exemples pratiques - Boîte à outils de l'expérience Web&#160;(BOEW)";
$_PAGE['issued'] = "2013-04-18";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['version'] = "1.1b";
$_PAGE['isapp'] = "1";

$_PAGE['nosearch'] = "1";
$_PAGE['nolang'] = "1";
$_PAGE['nositemenu'] = "1";
$_PAGE['nobcrumb'] = "1"; 

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
