<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "fr";

// Add additional languages the page will support.
$_PAGE['lang2'] = "en";

require_once __DIR__ . "/config/config.php";

// These are the required variables for each page.
$_PAGE['title_' . $_PAGE['lang1']] = "Page de contenu - Menu secondaire utilitaire - " . $_SITE['theme_list_' . $_PAGE['lang1']][$_SITE['wb_theme']] . " - Boîte à outils de l'expérience Web";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

// Optional variables.
$_PAGE['short_title_' . $_PAGE['lang1']] = "Page de contenu - Menu secondaire utilitaire - " . $_SITE['theme_list_' . $_PAGE['lang1']][$_SITE['wb_theme']];

$_PAGE['left_menu_gauche'] = __DIR__ ."/menu-left-gauche/left-menu-util-demo.php";

// Include header information that comes before custom CSS on the page.
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php";
?>

<!-- custom page metadata start -->
<meta name="description" content="La Boîte à outils de l’expérience Web (BOEW) rassemble différents composants réutilisables et prêts-à-utiliser pour la conception et la mise à jour de sites Web innovateurs qui sont à la fois accessibles, conviviaux et interopérables. Tous ces composants réutilisables sont des logiciels libres mis à la disposition des ministères et des collectivités Web externes."/>
<!-- end of custom metadata -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; ?>

<!-- custom css includes -->
<!-- Must include the css required to display the menu correctly -->
<link rel="stylesheet" href="/<?php echo $_SITE['wb_php_root'];?>dist-php/menu/menu-util.css" media="screen" type="text/css" />
<!-- end of custom css includes -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php"; ?>
<!-- Main content start -->
<?php include "includes/sample-cont-fr.php"; ?>
<!-- MainContentEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; ?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; ?>
