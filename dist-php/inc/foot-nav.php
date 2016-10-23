<?php
//$_INC_TYPE_ is used to determine if this is a splash page or if it's a standard content page
$_INC_TYPE_ = 'cont';
if( $_PAGE['issplash'] == 1 ) {
	$_INC_TYPE_ = 'sp-pe';
	echo '</main>' .PHP_EOL;
	
} else if( $_PAGE['iserror'] == 1 ) {
	$_INC_TYPE_ = 'err';
	echo '</main>' .PHP_EOL;
} else {
	$_INC_TYPE_ = 'cont';
	$_MOD_TEXT_ = $_SITE['wb_doc_dates_'.$_PAGE['lang1']];
    $_DATE_VERSION_TEXT_ = $_PAGE['modified'];
    if( $_PAGE['isapp'] == "1" ) {
        $_MOD_TEXT_ = $_SITE['wb_doc_version_' . $_PAGE['lang1']];
        $_DATE_VERSION_TEXT_ = $_PAGE['version'];
    }
	echo '    <dl id="wb-dtmd">' .PHP_EOL;
	echo '        <dt>' . $_SITE['wb_doc_dates_'.$_PAGE['lang1']] . '</dt>' .PHP_EOL;
	echo '       <dd>' .PHP_EOL;
	echo '            <time property="dateModified">' . $_DATE_VERSION_TEXT_. '</time>' .PHP_EOL;
	echo '        </dd>' .PHP_EOL;
	echo '    </dl>' .PHP_EOL;
	echo '</main>' .PHP_EOL;

	if( isset($_PAGE['left_menu_gauche']) && $_PAGE['left_menu_gauche']!='' && file_exists($_PAGE['left_menu_gauche'])) {

        echo '<nav role="navigation" id="wb-sec" typeof="SiteNavigationElement" class="col-md-3 col-md-pull-9 visible-md visible-lg">'. PHP_EOL;
		echo '<h2>'.$_SITE['wb_sec_'.$_PAGE['lang1']] .'</h2>' . PHP_EOL;
		echo '<ul class="list-group menu list-unstyled">'. PHP_EOL;
        echo '<li>';
        echo '<!-- SecNavStart -->' . PHP_EOL;

        include_once $_PAGE['left_menu_gauche'];
        
        echo '<!-- SecNavEnd -->' . PHP_EOL;
         	echo '</li>';
                echo '</ul>';
        echo '</nav>' . PHP_EOL;
		echo '</div>';
		echo '</div>';
	}
}
	/* include theme specific footer if the theme specific foot.php file exists */
	$_THEME_FOOT_FILE = $_SERVER['DOCUMENT_ROOT'].$_SITE['wb_php_dist_folder']."/".$_SITE['wb_theme']."/".$_INC_TYPE_."/foot.php";
	if( file_exists($_THEME_FOOT_FILE ) ) {
		include $_THEME_FOOT_FILE;
	}
?>

<!-- ScriptsStart -->

<!--[if gte IE 9 | !IE ]><!-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/wet-boew.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/ie8-wet-boew2.min.js"></script><![endif]-->

<!-- ScriptsEnd -->

