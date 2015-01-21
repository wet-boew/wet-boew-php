<!--[if gte IE 9 | !IE ]><!-->
<link href="<?php echo $_SITE['wb_core_dist_folder']?>/assets/favicon.ico" rel="icon" type="image/x-icon"/>
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/wet-boew.min.css"/><!--<![endif]-->
<?php
echo '<link rel="stylesheet" href="' . $_SITE['wb_core_dist_folder'] . '/css/theme';
if( $_SITE['wb_theme'] == 'theme-gcwu-fegc' ) {
	if( isset($_PAGE['issplash']) && $_PAGE['issplash'] == 1 ) {
		echo '-sp-pe';
	} else if( $_SITE['wb_theme'] == 'theme-gcwu-fegc' && isset($_PAGE['iserror']) && $_PAGE['iserror'] == 1 ) {
		echo '-srv';
	}
}
echo '.min.css"/>';
?><!--[if lt IE 9]>
<link href="<?php echo $_SITE['wb_core_dist_folder']?>/assets/favicon.ico" rel="shortcut icon"/>
<link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/ie8-wet-boew.min.css"/>
<?php 
	if( $_PAGE["iserror"] != 1 ) {
		/* include theme specific headers if the theme specific head-css.php file exists */
		$_THEME_CSS_FILE = $_SERVER['DOCUMENT_ROOT'].$_SITE['wb_php_dist_folder'].$_SITE['wb_core_root']."/head-css.php";
		if( file_exists($_THEME_CSS_FILE ) ) {
			include $_THEME_CSS_FILE;
		}
	}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/ie8-wet-boew.min.js"></script>
<![endif]-->
<noscript><link rel="stylesheet" href="<?php echo $_SITE['wb_core_dist_folder']; ?>/css/noscript.min.css"/></noscript>
