<?php 
	/* include theme specific headers if the theme specific head.php file exists */
	$_THEME_FOOT_FILE = $_SERVER['DOCUMENT_ROOT'].$_SITE['wb_php_dist_folder']."/".$_SITE['wb_theme']."/cont/foot.php";
	if( file_exists($_THEME_FOOT_FILE ) ) {
		include $_THEME_FOOT_FILE;
	}
?>