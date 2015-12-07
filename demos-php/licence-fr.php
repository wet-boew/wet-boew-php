<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "fr";

// Add additional languages the page will support.
$_PAGE['lang2'] = "en";

require_once __DIR__ . "/config/config.php";

// These are the required variables fore each page.
$_PAGE['title_' . $_PAGE['lang1']] = "Conditions régissant l'utilisation - Boîte à outils de l'expérience Web";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

// Optional variables.
$_PAGE['short_title_' .$_PAGE['lang1']] = "Conditions régissant l'utilisation";

// Include header information that comes before custome CSS on the page.
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="La Boîte à outils de l’expérience Web (BOEW) rassemble différents composants réutilisables et prêts-à-utiliser pour la conception et la mise à jour de sites Web innovateurs qui sont à la fois accessibles, conviviaux et interopérables. Tous ces composants réutilisables sont des logiciels libres mis à la disposition des ministères et des collectivités Web externes."/>
<!-- end of custom metadata -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; ?>

<!-- custom css includes -->
<!-- end of custom css includes -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php"; ?>
<!-- Main content start -->
<?php
$_content = file_get_contents( $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_core_root'] . "/Licence-" . $_PAGE['lang1'] . ".txt");
$_content = str_replace("\n\n","@#$#@",$_content);
$_content = str_replace("\n", " ", $_content);
$_content = str_replace("@#$#@", "\n", $_content);
foreach (explode("\n", $_content) as $_line) {
   echo '<p>' . $_line . '</p>';
}
?>
<!-- MainContentEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; ?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; ?>
