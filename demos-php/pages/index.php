<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.

// Note: We check if $_PAGE['lang1'] and $_PAGE['lang2'] are already set if called from splashpage-en.php and splashpage-fr.php.
if (!isset($_PAGE['lang1'])) $_PAGE['lang1'] = "en";
if (!isset($_PAGE['lang2'])) $_PAGE['lang2'] = "fr";

require_once __DIR__ . "/config/config.php";

// These are the required variables for this page.
if (!isset($_PAGE['title_en'])) $_PAGE['title_en'] = "";
if (!isset($_PAGE['title_fr'])) $_PAGE['title_fr'] = "";

$_PAGE['sub_title_en'] = "Web Experience Toolkit";
$_PAGE['sub_title_fr'] = "Boîte à outils de l’expérience Web";

$_PAGE['issplash'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<meta name="description" lang="fr" content="French description / Description en français" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" lang="fr" content="French name of the content author / Nom en français de l'auteur du contenu" />
<!-- end of custom metadata -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; ?>
<!-- CustomCSSStart -->
<!-- CustomCSSEnd -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php"; ?>
<!-- Main content start -->
<?php include $_SERVER['DOCUMENT_ROOT'] .$_SITE['wb_website_root'] . "/pages/includes/index.php"; ?>
<!-- MainContentEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; ?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; ?>
