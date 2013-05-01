<?php
$_THEME_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'];

//script if the browser is less than or equal to IE 8
$_JS_LTE_IE8_ = '<script src="'.$_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/js/theme-ie-min.js"></script>';

//script for if the browser is greater than IE 8
$_JS_GT_IE8_ = '<script src="'.$_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/js/theme-min.js"></script>';
		
//use the content footers by default
$_FOOT_START_INCLUDE_ = $_THEME_PATH_ . "/cont/foot-start.php";
$_FOOT_INCLUDE_ = $_THEME_PATH_ . "/cont/foot-nav.php";
if( $_PAGE['isserv'] == "1" ) {
	//use the server footer if the isserv flag is set
	$_FOOT_START_INCLUDE_ = $_THEME_PATH_ . "/serv/foot-start.php";
	$_FOOT_INCLUDE_ = $_THEME_PATH_ . "/serv/foot-nav.php";
} else if( $_PAGE['issplash'] == "1" ) {
	//use the splash page footer if the issplash flag is set
	$_FOOT_START_INCLUDE_ = $_THEME_PATH_ . "/sp-pe/foot-start.php";
	$_FOOT_INCLUDE_ = $_THEME_PATH_ . "/sp-pe/foot-nav.php";
}

if( file_exists($_FOOT_START_INCLUDE_) ) {
	include_once $_FOOT_START_INCLUDE_;
}
?>
<div class="clear"></div>
</div></div>
<?php

if( isset($_PAGE['left_menu_gauche'])  && $_PAGE['left_menu_gauche']!='' && file_exists($_PAGE['left_menu_gauche'])) {
	echo '<div id="wb-sec"><div id="wb-sec-in"><nav role="navigation"><h2 id="wb-nav">'.$_SITE['wb_sec_'.$_PAGE['lang1']] .'</h2>' . "\n";
	echo '<div class="wb-sec-def">' . "\n";
	echo '<!-- SecNavStart -->' . "\n";

	include_once $_PAGE['left_menu_gauche'];
	
	echo '<!-- SecNavEnd -->' . "\n";
	echo '</div>' . "\n";
	echo '</nav></div></div>' . "\n";

}
?>
</div></div>

<div id="wb-foot"><div id="wb-foot-in"><footer><h2 id="wb-nav"><?php echo $_SITE['wb_foot_' .$_PAGE['lang1']] ;?></h2>
<?php
if( file_exists($_FOOT_INCLUDE_) ) {
	include_once $_FOOT_INCLUDE_;
}
?>
</footer>

</div></div></div>

<!-- ScriptsStart -->
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/settings.js"></script>
<!--[if lte IE 8]>
<?php /* theme specific include */ echo $_JS_LTE_IE8_ ?>

<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/pe-ap-ie-min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/jquerymobile/jquery.mobile-ie.min.js"></script>
<![endif]-->
<!--[if gt IE 8]><!-->
<?php /* theme specific include */ echo $_JS_GT_IE8_ ?>

<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/pe-ap-min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/jquerymobile/jquery.mobile.min.js"></script>
<!--<![endif]-->
<!-- ScriptsEnd -->

