<?php
//always set the page language options first
//set 'lang1' to 'eng' for English pages, 'fra' for French pages
$_PAGE['lang1'] = "en";

//Add additional languages the page will support
$_PAGE['lang2'] = "fr";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));

require_once $_PAGE_PATH_ . "/config/config.php";

/* These are the required variables fore each page */
$_PAGE['title_' . $_PAGE['lang1']] = "Language selection - Web Experience Toolkit / Sélection de la langue - Boîte à outils de l’expérience Web - Web Experience Toolkit";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

$_PAGE['issplash'] = 1;
//include header information that comes before custome CSS on the page
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="Web Experience Toolkit (WET) includes reusable components for building and maintaining innovative Web sites that are accessible, usable, and interoperable. These reusable components are open source software and free for use by departments and external Web communities"/>
<!-- end of custom metadata -->

<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-css.php"; 
?>

<!-- custom css includes -->
<!-- end of custom css includes -->


<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-nav.php";
?>
<!-- Main content start -->
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
<!-- MainContentEnd -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php";
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php";
?>
