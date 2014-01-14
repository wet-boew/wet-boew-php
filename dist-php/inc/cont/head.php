<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'].'/assets/'.$_SITE['wb_sig_image'];

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
		<div class="container">
			<div class="row">
				<section id="wb-lng" class="visible-md visible-lg">
					<h2><?php echo $_SITE['wb_lang_header_'.$_PAGE['lang1']]; ?></h2>
					<ul class="text-right">
<?php
if( $_PAGE['nolang'] != "1" ) {
	$langString = "";
	for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
		$listItem = '<li';
		if( $i == 1 ) {
			$listItem .= ' class="curr" >';
			$listItem .= $_SITE['wb_lang_text_' . $_PAGE['lang'.$i]] . '&#32;';
			$listItem .= '<span>'.$_SITE['wb_lang_cur_'.$_PAGE['lang1']] .'</span>' . "\n";
		} else {
			$listItem .= '>';
			$listItem .= '<a lang="' .$_SITE['wb_meta_' . $_PAGE['lang'.$i]];
			$listItem .= '" href="' .$_SITE['wb_cmblang_href_' . $_PAGE['lang'.$i]];
			$listItem .= '">' . $_SITE['wb_lang_text_' . $_PAGE['lang'.$i]]; 
			$listItem .= "</a>";
		}
		$listItem .= '</li>' . "\n"; 
		
		$langString = $listItem . $langString;
	}
	echo $langString;
}
?>
					</ul>
				</section>
				<section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
					<h2><?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?></h2>
					<ul class="pnl-btn list-inline text-right">
					<li><a href="#mb-pnl" title="<?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?>" aria-controls="mb-pnl" class="overlay-lnk" role="button"><span class="glyphicon glyphicon-th-list"><span class="wb-inv"><?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?></span></span></a></li>
					</ul>
					<div id="mb-pnl"></div>
				</section>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div id="wb-sttl" class="col-md-8">
				<a href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>">
					<object type="image/svg+xml" tabindex="-1" role="img" data="<?php echo $_SIG_IMG_; ?>.svg" aria-label="Web Experience Toolkit"></object>
					<span><?php echo $_SITE['wb_site_title_'.$_PAGE['lang1']] ?></span>
				</a>
			</div>
<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section id="wb-srch" class="col-md-4 visible-md visible-lg">';
	echo '<h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
    include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] ."/inc/search.php";
	echo '</section>';
}
?>
		</div>
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
