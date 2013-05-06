<?php
	$_THEME_SEARCH_FILE_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'] ."/search.php";
	
	if( file_exists($_THEME_SEARCH_FILE_) ) {
		include_once $_THEME_SEARCH_FILE_;
	}
?>