<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "en";

// Add additional languages the page will support.
$_PAGE['lang2'] = "fr";

require_once __DIR__ . "/config/config.php";

// These are the required variables for this page.
$_PAGE['title_' . $_PAGE['lang1']] = "Content page - Secondary Utility Menu - " . $_SITE['theme_list_' . $_PAGE['lang1']][$_SITE['wb_theme']] . " - Web Experience Toolkit";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

//Optional variables
$_PAGE['short_title_' .$_PAGE['lang1']] = "Content page - Secondary Utility Menu - " . $_SITE['theme_list_' . $_PAGE['lang1']][$_SITE['wb_theme']];

$_PAGE['left_menu_gauche'] = __DIR__ ."/menu-left-gauche/left-menu-util-demo.php";

// Include header information that comes before custom CSS on the page.
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="Web Experience Toolkit (WET) includes reusable components for building and maintaining innovative Web sites that are accessible, usable, and interoperable. These reusable components are open source software and free for use by departments and external Web communities"/>
<!-- end of custom metadata -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; ?>

<!-- custom css includes -->
<!-- Must include the css required to display the menu correctly -->
<link rel="stylesheet" href="/<?php echo $_SITE['wb_php_root'];?>dist-php/menu/menu-util.css" media="screen" type="text/css" />
<!-- end of custom css includes -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";  ?>
<!-- Main content start -->
<?php include "includes/menu-util-demo-en.php"; ?>
<!-- MainContentEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; ?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; ?>
