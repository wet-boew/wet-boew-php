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
$_PAGE['title_' . $_PAGE['lang1']] = "Thème de la BOEW - Boîte à outils de l'expérience Web";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

//Optional variables
$_PAGE['short_title_' .$_PAGE['lang1']] = "Thème de la BOEW";

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
<?php include "includes/index-fr.php"; ?>
<!-- MainContentEnd -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-nav.php";
?>
<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
<?php
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/foot-end.php";
?>
<!--

	<nav role="navigation" class="row">
	<h2>Informations sur le site</h2>
	<section class="col-sm-3">
	<h3>À propos</h3>
	<ul class="list-unstyled">
	<li><a href="/v4.0-ci/index-fr.html#apropos">À propos de la Boîte à outils de l’expérience Web</a></li>
	<li><a href="http://www.tbs-sct.gc.ca/ws-nw/index-fra.asp">À propos des normes Web</a></li>
	</ul>
	</section>
	<section class="col-sm-3">
	<h3>Contactez-nous</h3>
	<ul class="list-unstyled">
	<li><a href="https://github.com/wet-boew/wet-boew/issues/new">Questions ou commentaires?</a></li>
	</ul>
	</section>
	<section class="col-sm-3">
	<h3>Nouvelles</h3>
	<ul class="list-unstyled">
	<li><a href="https://github.com/wet-boew/wet-boew/pulse">Activité du projet récente</a></li>
	<li><a href="https://github.com/wet-boew/wet-boew/graphs">Statistiques du projet</a></li>
	</ul>
	</section>
	<section class="col-sm-3">
	<h3>Restez branchés</h3>
	<ul class="list-unstyled">
	<li><a href="https://twitter.com/BoiteExpWeb">Twitter</a></li>
	</ul>
	</section>
	</nav>
-->
