<?php
// Always set the page language options first.
// Set 'lang1' to 'en' for English pages, 'fr' for French pages.
$_PAGE['lang1'] = "fr";
$_PAGE['lang2'] = "en";

require_once __DIR__ . "/config/config.php";

// These are the required variables for this page.
$_PAGE['title_en'] = "We couldn&#x27;t find that Web page (Error 404) - Government of Canada Web Usability theme";
$_PAGE['title_fr'] = "Nous ne pouvons trouver cette page Web (Erreur 404) - Thème de la facilité d’emploi Web du gouvernement du Canada";

$_PAGE['short_title_en'] = "Error 404";
$_PAGE['short_title_fr'] = "Erreur 404";

$_PAGE['err_msg_en'] = "We're sorry you ended up here. Sometimes a page gets moved or deleted, but hopefully we can help you find what you're looking for.";
$_PAGE['err_msg_fr'] = "Nous sommes désolés que vous ayez abouti ici. Il arrive parfois qu'une page ait été déplacée ou supprimée. Heureusement, nous pouvons vous aider à trouver ce que vous cherchez.";

$_PAGE['iserror'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php";
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php";
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php";
?>
