<?php
//get the less than or equal to Internet Explorer 8 javascript includes
function js_lte_ie8() {
	global $_SITE;
	$ret_string = '<script src="'.$_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/js/theme-ie-min.js"></script>';
	
	return $ret_string;
}

//get the greater than Internet Explorer 8 javascript includes
function js_gt_ie8() {
	global $_SITE;
	$ret_string = '<script src="'.$_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/js/theme-min.js"></script>';
	
	return $ret_string;
}

$_FOOT_INCLUDE_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/foot-nav-reg.php";
if( $_PAGE['isserv'] == "1" ) {
	$_FOOT_INCLUDE_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/foot-nav-serv.php";
} else if( $_PAGE['issplash'] == "1" ) {
	$_FOOT_INCLUDE_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] . "/foot-nav-sp.php";
}

include_once $_FOOT_INCLUDE_;
?>
