<?php
//this is the only time the user needs to hard code the path, once the
//configuration file has been required all other paths can use the variables from that
//file. 
require_once $_SERVER['DOCUMENT_ROOT'] . "/wet-boew-php/dist-php/theme-base/config.php";

/* These are the required variables fore each page */
//set 'lang1' to 'eng' for English pages, 'fra' for French pages
$_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "spa";
$_PAGE['lang3'] = "fra";
$_PAGE['title_' . $_PAGE['lang1']] = "Content page - Base theme - Working examples - Web Experience Toolkit&#160;(WET)";
$_PAGE['issued'] = "YYYY-MM-DD";
$_PAGE['modified'] = "YYYY-MM-DD";

$_PAGE['short_title_' .$_PAGE['lang1']] = "Content page";

/* This is a list of optional variables 

// Set the short title for the page to be displayed just above the main content
// if not set then the required $_PAGE['title_' . $_PAGE['lang1']] above will be used
$_PAGE['short_title_' . $_PAGE['lang1']] = "";

// Set the alternate short title for the page to be displayed just above the main content
$_PAGE['short_title_' . $_PAGE['lang2']] = "";

// Set 'isapp' to one to use the application template. If this is an application use
// the 'version' variable, which is displayed at the bottom of the content area
// instead of the Date Modified
$_PAGE['isapp'] = "1";
$_PAGE['version'] = "";

//set 'issplash' to one to use the splash page
$_PAGE['issplash'] = "1";

//set 'isserv' to one to use the server template
$_PAGE['isserv'] = "1";

*
 *	Pointing 'left_gauche_menu_eng' or 'left_gauche_menu_fra' to a
 *	file will use that file as the left side menu (secondary navigation)
 *	and make this page a two column layout automaticlly. 
 *
$_PAGE['left_gauche_menu_eng'] = $_SERVER['DOCUMENT_ROOT'] . "/demos-php/menu-left-gauche/secnav1-eng.php";

//Possible options for languages
$_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";
$_PAGE['lang3'] = "deu";
$_PAGE['lang4'] = "spa";
$_PAGE['lang5'] = "ita";
$_PAGE['lang6'] = "por";
$_PAGE['lang7'] = "rus";

****************************************/
include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/head-doc.php"; 
?>

<!-- custom page metadata start -->
<meta name="description" content="English description / Description en anglais" />
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

<?php include_once "includes/sample-cont-eng.php"; ?>


<dl id="base-date-mod" role="contentinfo">
<dt>Date modified:</dt><dd><span><time>2013-04-17</time></span></dd>
</dl>
<div class="clear"></div>
<!-- MainContentEnd -->
</div></div>
</div></div>

<div id="wb-foot"><div id="wb-foot-in"><footer><h2 id="wb-nav">Footer</h2>
<!-- FooterStart -->
<nav role="navigation"><div id="base-sft"><h3>Site footer</h3><div id="base-sft-in">
<section><div class="span-2"><h4 class="base-col-head"><a href="#">About us</a></h4>
<ul>
<li><a href="#">Our Mandate</a></li>
<li><a href="#">Our history</a></li>
</ul>
</div></section>
<section><div class="span-2"><h4 class="base-col-head"><a href="#">News</a></h4>
<ul>
<li><a href="#">News releases</a></li>
<li><a href="#">Media advisories</a></li>
<li><a href="#">Multimedia</a></li>
</ul>
</div></section>
<section><div class="span-2"><h4 class="base-col-head"><a href="#">Contact us</a></h4>
<address>
<ul>
<li><a href="#">Phone numbers</a></li>
<li><a href="#">Office locations</a></li>
</ul>
</address>
</div></section>
<section><div class="span-2"><h4 class="base-col-head"><a href="#">Stay connected</a></h4>
<ul>
<li><a rel="external" href="#">YouTube</a></li>
<li><a rel="external" href="#">Twitter</a></li>
<li><a href="#">Feeds</a></li>
</ul>
</div></section>
</div></div></nav>

<section><div id="base-fullft"><h3>Full-width footer area</h3>
<p class="mobile-hide">id="base-fullft"</p>
<div id="base-fullft-in"><p class="mobile-hide">id="base-fullft-in"</p></div>
</div></section>
<!-- FooterEnd -->
</footer>
</div></div></div>

<!-- ScriptsStart -->
<script src="../../dist/js/settings.js"></script>
<!--[if lte IE 8]>
<script src="../../dist/theme-base/js/theme-ie-min.js"></script>
<script src="../../dist/js/pe-ap-ie-min.js"></script>
<script src="../../dist/js/jquerymobile/jquery.mobile-ie.min.js"></script>
<![endif]-->
<!--[if gt IE 8]><!-->
<script src="../../dist/theme-base/js/theme-min.js"></script>
<script src="../../dist/js/pe-ap-min.js"></script>
<script src="../../dist/js/jquerymobile/jquery.mobile.min.js"></script>
<!--<![endif]-->
<!-- ScriptsEnd -->

<!-- CustomScriptsStart -->
<!-- CustomScriptsEnd -->
</body>
</html>