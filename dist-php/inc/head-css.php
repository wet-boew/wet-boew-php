<?php
/* Include all of the required javascript and css from the core and theme specific distribution*/

$_THEME_CSS_FILE = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/head-css.php";

//if there's a theme specific css file get the css includes from it.
$_LTE_IE8_CSS_ = "";
$_LTE_GT_CSS_ = "";
if( file_exists($_THEME_CSS_FILE) ) {
	include_once $_THEME_CSS_FILE;
	
	$_LTE_IE8_CSS_ = lte_ie8_css();
	$_LTE_GT_CSS_ = gt_ie8_css();
}

?>
<!--[if lte IE 8]>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/jquery-ie.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/polyfills/html5shiv-min.js"></script>
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/grids/css/util-ie-min.css" />
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/css/pe-ap-ie-min.css" />
<?php echo $_LTE_IE8_CSS_; ?>
<![endif]-->
<!--[if gt IE 8]><!-->
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/grids/css/util-min.css" />
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/css/pe-ap-min.css" />
<?php echo $_LTE_GT_CSS_; ?>
<!--<![endif]-->
