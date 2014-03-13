<?php

//always set the page language options first
$_PAGE['lang1'] = "en";
$_PAGE['lang2'] = "fr";


//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$path = realpath(dirname(__FILE__));
//add PHP variants need to load a config file, choosing the /config/{theme}/config.php directory
//determines what them thist page will use.
require_once $path ."/config/config.php";

$_PAGE['title_en'] = "Welcome";
$_PAGE['title_fr'] = "Bienvenue";

$_SITE['wb_site_href_en'] = $_SITE['wb_php_root'] . "/demos-php/index-en.php";
$_SITE['wb_site_href_fr'] = $_SITE['wb_php_root'] . "/demos-php/index-fr.php";

$_PAGE['issplash'] = "1";

$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
<meta name="description" lang="fr" content="French description / Description en français" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" lang="fr" content="French name of the content author / Nom en français de l'auteur du contenu" />
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>
<!-- CustomCSSStart -->
<!-- CustomCSSEnd -->
<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
?>
<!-- Main content start -->
<?php
if( $_SITE['wb_theme'] == 'theme-gcwu-fegc') {
?>
    <div class="col-md-12">
        <h1>Welcome / <span lang="fr">Bienvenue</span></h1>
        <section class="col-md-6">
            <h2>Web Experience Toolkit</h2>
            <a class="btn btn-lg btn-primary btn-block" href="../index-en.html">English</a> <a class="btn btn-lg btn-default btn-block" href="../../License-en.html" rel="license">Terms and conditions of use</a> </section>
        <section class="col-md-6" lang="fr">
            <h2>Boîte à outils de l'expérience Web</h2>
            <a class="btn btn-lg btn-primary btn-block" href="../index-fr.html">Français</a> <a class="btn btn-lg btn-default btn-block" href="../../Licence-fr.html" rel="license">Conditions régissant l'utilisation</a> </section>
    </div>  
<?php
} else {
?>
<div class="row mrgn-tp-lg">
<div class="col-md-12">
<section class="col-md-6">
<h2 class="h3 text-center">Web Experience Toolkit</h2>
<a class="btn btn-lg btn-primary btn-block" href="<?php echo $_SITE['wb_site_href_en']; ?>"><?php echo $_SITE['wb_lang_text_en']; ?></a>
<a class="btn btn-lg btn-default btn-block" href="<?php echo $_SITE['wb_terms_href_en']; ?>" rel="license"><?php echo $_SITE['wb_terms_en']; ?></a>
</section>
<section class="col-md-6" lang="fr">
<h2 class="h3 text-center">Boîte à outils de l’expérience Web</h2>
<a class="btn btn-lg btn-primary btn-block" href="<?php echo $_SITE['wb_site_href_fr']; ?>"><?php echo $_SITE['wb_lang_text_fr']; ?></a>
<a class="btn btn-lg btn-default btn-block" href="<?php echo $_SITE['wb_terms_href_fr']; ?>" rel="license"><?php echo $_SITE['wb_terms_fr']; ?></a>
</section>
</div>
</div>
<?php
}
?>
<!-- MainContentEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php"; 
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php 
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php"; 
?>
