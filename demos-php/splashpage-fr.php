<?php
//always set the page language options first
//set 'lang1' to 'en' for English pages, 'fr' for French pages
$_PAGE['lang1'] = "fr";

//Add additional languages the page will support
$_PAGE['lang2'] = "en";

//programaticly setting the main config file means the demos will work regardless of where
//they're dumpted. Saves time when deploying the demos to different servers for development
$_PAGE_PATH_ = realpath(dirname(__FILE__));

require_once $_PAGE_PATH_ . "/config/config.php";

/* These are the required variables fore each page */
$_PAGE['title_' . $_PAGE['lang1']] = "Sélection de la langue - Boîte à outils de l’expérience Web / Language selection - Web Experience Toolkit - Boîte à outils de l'expérience Web";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

$_PAGE['issplash'] = 1;

//include header information that comes before custome CSS on the page
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="La Boîte à outils de l’expérience Web (BOEW) rassemble différents composants réutilisables et prêts-à-utiliser pour la conception et la mise à jour de sites Web innovateurs qui sont à la fois accessibles, conviviaux et interopérables. Tous ces composants réutilisables sont des logiciels libres mis à la disposition des ministères et des collectivités Web externes."/>
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
<h2 class="h3 text-center">Boîte à outils de l’expérience Web</h2>
<a class="btn btn-lg btn-primary btn-block" href="../index-fr.html">Français</a>
<a class="btn btn-lg btn-default btn-block" href="../../Licence-fr.html" rel="license">Conditions régissant l'utilisation</a>
</section>
<section class="col-md-6" lang="en">
<h2 class="h3 text-center">Web Experience Toolkit</h2>
<a class="btn btn-lg btn-primary btn-block" href="../index-en.html">English</a>
<a class="btn btn-lg btn-default btn-block" href="../../License-en.html" rel="license">Terms and conditions of use</a>
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
