<?php
//if the site menu hasn't been set or the file can't be found set the no site menu flag
if( !isset($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ]) || (isset($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ])
 && ($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ]=="" || !file_exists($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ])))) {
	$_PAGE['nositemenu'] = "1";
}

//if the bread crumb trail hasn't been set or the file can't be found set the nobcrumb
if( !isset($_SITE['wb_bcrumb_file']) || (isset($_SITE['wb_bcrumb_file']) && 
	($_SITE['wb_bcrumb_file'] == "" || !file_exists($_SITE['wb_bcrumb_file'])))) {
		$_PAGE['nobcrumb'] = "1";
}

?>
<!-- HeaderStart -->

<div id="wb-bnr">
	<div id="wb-bar">
<?php 
	/* include theme specific headers if the theme specific head.php file exists */
	$_THEME_HEAD_FILE = $_SERVER['DOCUMENT_ROOT'].$_SITE['wb_php_dist_folder']."/".$_SITE['wb_theme']."/cont/head.php";
	if( file_exists($_THEME_HEAD_FILE ) ) {
		include $_THEME_HEAD_FILE;
	}
?>
	</div>
</div>

<?php
//Handle the mega menu and bread crumb trail
	if ($_PAGE['nositemenu'] != '1') {
	
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
	} else {
		echo '<span data-trgt="mb-pnl" class="wb-menu hide"></span>';
	}
	
	if ($_PAGE['nobcrumb'] != '1') {
		echo '<nav role="navigation" id="wb-bc" property="breadcrumb">';
		echo '<h2>'.$_SITE['wb_bcrumb_' .$_PAGE['lang1'] ].'</h2>';
		echo '<div class="container">';
		echo '<div class="row">';
		echo '<ol class="breadcrumb">';
		include $_SITE['wb_bcrumb_file'];
		echo '</ol>';
		echo '</div>';
		echo '</div>';
		echo '</nav>';
	}
?>

<!-- HeaderEnd -->
