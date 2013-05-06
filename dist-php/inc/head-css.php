<?php
//get the less than or equal to Internet Explorer 8 css includes
function lte_ie8_css() {
	global $_SITE, $_PAGE;
	$ret_string = "";
	
	//use the server theme css if the page has been designated as a server page
	$ret_string .= '<link rel="stylesheet" href="';
	$ret_string .= $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'];
	if( $_PAGE['isserv'] == "1") {
		$ret_string .= '/css/theme-serv-ie-min.css';
	} else if($_PAGE['issplash']) {
		$ret_string .= '/css/theme-sp-pe-ie-min.css';
	} else {
		$ret_string .= '/css/theme-ie-min.css';
	}
	$ret_string .= "\" />\n";
	$ret_string .= '<noscript><link rel="stylesheet" href="' . $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] . '/css/theme-ns-ie-min.css" /></noscript>' ."\n";

	return $ret_string;
}

//get the greather than Internet Explorer 8 css includes
function gt_ie8_css() {
	global $_SITE, $_PAGE;
	$ret_string = "";
	
	//use the server theme css if the page has been designated as a server page
	$ret_string .= '<link rel="stylesheet" href="';
	$ret_string .= $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'];
	if( $_PAGE['isserv'] == "1") {
		$ret_string .= '/css/theme-serv-min.css';
	} else if($_PAGE['issplash']) {
		$ret_string .= '/css/theme-sp-pe-min.css';
	} else {
		$ret_string .= '/css/theme-min.css';
	}
	$ret_string .= "\" />\n";
	$ret_string .= '<noscript><link rel="stylesheet" href="' .$_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] . '/css/theme-ns-min.css" /></noscript>' ."\n";

	return $ret_string;
}

?>
<!--[if lte IE 8]>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/jquery-ie.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/polyfills/html5shiv-min.js"></script>
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/grids/css/util-ie-min.css" />
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/css/pe-ap-ie-min.css" />
<?php echo lte_ie8_css(); ?>
<![endif]-->
<!--[if gt IE 8]><!-->
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/grids/css/util-min.css" />
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/css/pe-ap-min.css" />
<?php echo gt_ie8_css(); ?>
<!--<![endif]-->
