<?php 
	/* include theme specific headers if the theme specific /sp-pe/head.php file exists */
	$_THEME_SP_PE = $_SERVER['DOCUMENT_ROOT'].$_SITE['wb_php_dist_folder'].$_SITE['wb_core_root']."/sp-pe/head.php";
	if( file_exists($_THEME_SP_PE ) ) {
		include $_THEME_SP_PE;
	}
?>