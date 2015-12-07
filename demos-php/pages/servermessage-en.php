<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "en";

require_once __DIR__ . "/config/config.php";

// These are the required variables for this page.
$_PAGE['title_en'] = "Message title - Government of Canada Web Usability theme";
$_PAGE['short_title_en'] = "Message title";

$_PAGE['err_msg_en'] = "Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text.";

$_PAGE['isserv'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
