<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "en";

// Add additional languages the page will support.
$_PAGE['lang2'] = "fr";

require_once __DIR__ . "/config/config.php";

// These are the required variables fore each page.
$_PAGE['title_' . $_PAGE['lang1']] = "Terms and Conditions of Use - Web Experience Toolkit";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

// Optional variables.
$_PAGE['short_title_' .$_PAGE['lang1']] = "Terms and Conditions of Use";

// Include header information that comes before custome CSS on the page.
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="Web Experience Toolkit (WET) includes reusable components for building and maintaining innovative Web sites that are accessible, usable, and interoperable. These reusable components are open source software and free for use by departments and external Web communities"/>
<!-- end of custom metadata -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; ?>

<!-- custom css includes -->
<!-- end of custom css includes -->

<?php include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php"; ?>
<!-- Main content start -->
<?php
$_content = file_get_contents( $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_core_root'] . "/License-" . $_PAGE['lang1'] . ".txt");
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
