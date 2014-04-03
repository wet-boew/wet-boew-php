<?php
//always set the page language options first
//set 'lang1' to 'en' for English pages, 'fr' for French pages
$_PAGE['lang1'] = "fr";

//Add additional languages the page will support
$_PAGE['lang2'] = "en";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));

require_once $_PAGE_PATH_ . "/config/config.php";

//I'm a lazy programmer, instead of creating separate demos for different themes
//I just created this array so depending on what the user sets the theme as in the
// demos-php/config/config.php file the title will match the theme
$theme_title = array( "theme-base" => "WET theme", "theme-gcwu-fegc" => "GCWU Theme");

/* These are the required variables fore each page */
$_PAGE['title_' . $_PAGE['lang1']] = "Page de contenu - Menu Secondaire - Thème de la BOEW - Boîte à outils de l'expérience Web";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

//Optional variables
$_PAGE['short_title_' .$_PAGE['lang1']] = "Page de contenu - Menu Secondaire - Thème de la BOEW";

$_PAGE['left_menu_gauche'] = $_PAGE_PATH_ ."/../menu-left-gauche/secnav1-fr.php";

//include header information that comes before custome CSS on the page
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="La Boîte à outils de l’expérience Web (BOEW) rassemble différents composants réutilisables et prêts-à-utiliser pour la conception et la mise à jour de sites Web innovateurs qui sont à la fois accessibles, conviviaux et interopérables. Tous ces composants réutilisables sont des logiciels libres mis à la disposition des ministères et des collectivités Web externes."/>
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>

<!-- custom css includes -->
<!-- end of custom css includes -->


<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php"; 
?>
<!-- Main content start -->
<?php include "includes/sample-cont-fr.php"; ?>
<!-- MainContentEnd -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php";
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php";
?>
