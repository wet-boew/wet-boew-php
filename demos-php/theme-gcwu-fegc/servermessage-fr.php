<?php

//always set the page language options first
$_PAGE['lang1'] = "fr";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
//add PHP variants need to load a config file, choosing the /config/{theme}/config.php directory
//determines what them thist page will use.
require_once $path ."/config/config.php";

$_PAGE['title_en'] = "Titre du message - Thème de la facilité d’emploi Web du gouvernement du Canada";
$_PAGE['short_title_en'] = "Titre du message";

$_PAGE['err_msg_en'] = "Texte modèle. Texte modèle. Texte modèle. Texte modèle. Texte modèle. Texte modèle. Texte modèle.";

$_PAGE['isserv'] = "1";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
