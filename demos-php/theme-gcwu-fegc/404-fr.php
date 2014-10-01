<?php

//always set the page language options first
$_PAGE['lang1'] = "fr";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
//add PHP variants need to load a config file, choosing the /config/{theme}/config.php directory
//determines what them thist page will use.
require_once $path ."/config/config.php";

$_PAGE['title_fr'] = "Nous ne pouvons trouver cette page Web (Erreur 404)";
$_PAGE['short_title_fr'] = "Erreur 404";

$_PAGE['err_msg_fr'] = "Nous sommes désolés que vous ayez abouti ici. Il arrive parfois qu'une page ait été déplacée ou supprimée. Heureusement, nous pouvons vous aider à trouver ce que vous cherchez.";

$_PAGE['iserror'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
