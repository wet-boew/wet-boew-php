<?php

//always set the page language options first
$_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));
//if this is a windows machine use the backslash, otherwise use forwardslash
$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
$_CONFIG_PATH = substr($_PAGE_PATH_, 0, strrpos($_PAGE_PATH_, $_SLASH_)) . "/config" . substr($_PAGE_PATH_, strrpos($_PAGE_PATH_, $_SLASH_));
require_once $_CONFIG_PATH ."/config.php";



$_PAGE['title_eng'] = "Home page - GC Web Usability theme - Working examples - Web Experience Toolkit&#160;(WET)";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>

<!-- CustomCSSStart -->
<style>
.gcwu-minister-in{background:#eee url(images/bg-minister-bottom.gif) no-repeat right bottom;}
.gcwu-minister p{background:#fff url(images/bg-minister-top.gif) no-repeat right top;}
#gcwu-video .mediaplayer{line-height:0;}
#gcwu-video ul.mp-downloadable{position:absolute;clip:rect(1px, 1px, 1px, 1px);height:1px;width:1px;overflow:hidden;}
#gcwu-video div.background-dark{background:#eee !important;color:#000;padding-bottom:10px;}
</style>
<!-- CustomCSSEnd -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
?>
<!-- Main content start -->
<?php  include "includes/sample-home-".$_PAGE["lang1"].".php"; ?>
<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
