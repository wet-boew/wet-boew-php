<!--[if gte IE 9 | !IE ]><!-->
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/wet-boew.min.css"/>
<!--<![endif]-->
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/theme.min.css"/>
<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/ie8-wet-boew.css"/>
<?php 
	/* include theme specific headers if the theme specific head-css.php file exists */
	$_THEME_CSS_FILE = $_SERVER['DOCUMENT_ROOT'].$_SITE['wb_php_dist_folder'].$_SITE['wb_core_root']."/head-css.php";
	if( file_exists($_THEME_CSS_FILE ) ) {
		include $_THEME_CSS_FILE;
	}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/ie8-wet-boew.min.js"></script><![endif]-->
<noscript><link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/noscript.min.css"/></noscript>