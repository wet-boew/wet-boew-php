<?php
	$_THEME_FOOT_START_FILE = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/foot-start.php"; 
	if( file_exists($_THEME_FOOT_START_FILE) ) {
		include_once $_THEME_FOOT_START_FILE;
	}

	if( isset($_PAGE['left_menu_gauche'])  && $_PAGE['left_menu_gauche']!='') {
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
	$_THEME_FOOT_NAV_FILE = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/foot-nav.php"; 
	
	$_JS_LTE_IE8_ = "";
	$_JS_GT_IE8_ = "";
	if( file_exists($_THEME_FOOT_NAV_FILE) ) {
		include_once $_THEME_FOOT_NAV_FILE;
		$_JS_LTE_IE8_ = js_lte_ie8();
		$_JS_GT_IE8_ = js_gt_ie8();
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

