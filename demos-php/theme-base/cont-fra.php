<?php
//this is the only time the user needs to hard code the path, once the
//configuration file has been required all other paths can use the variables from that
//file. 
require_once $_SERVER['DOCUMENT_ROOT'] . "/demos-php/theme-base/config.php";

$_PAGE['lang1'] = "fra";
$_PAGE['lang2'] = "eng";
$_PAGE['lang3'] = "spa";

$_PAGE['title_fra'] = "Page de contenu - Thème de base - Exemples pratiques - Boîte à outils de l'expérience Web&#160;(BOEW)";
$_PAGE['short_title_fra'] = "Page de contenu - Thème de base";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
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
include "includes/sample-cont-eng.php";
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