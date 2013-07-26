<!-- HeaderStart -->
<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['gcwu_sig_image'].'-blk-' . $_PAGE['lang1'];
	$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

	$_WMMS_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms-intra';
	$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
?>

<nav role="navigation"><div id="gcwu-gcnb"><h2>Intranet navigation bar</h2><div id="gcwu-gcnb-in"><div id="gcwu-intranetnb"><div id="gcwu-intranetnb-in">
<ul>
<?php
//for the intranet GCWU theme we allow three custom links
for( $i=1; $i<=3; $i++ ) {
	if( $_SITE['gcwu_gcnb'.$i.'_href_'.$_PAGE['lang1']]) {
		echo '<li id="gcwu-gcnb'.$i.'"><a href="'.$_SITE['gcwu_gcnb'.$i.'_href_'.$_PAGE['lang1']].'">'.$_SITE['gcwu_gcnb'.$i.'_text_'.$_PAGE['lang1']]."</a></li>\n";
	}
}
if( $_PAGE['nolang'] != "1" ) {
	for($i=2; isset($_PAGE['lang'.$i]); $i++ ) {
		echo '<li id="gcwu-fullhd-lang';
		if( $i-1 >= 2 ) {
			echo "-" .($i-1);
		}
		echo '">';
		echo '<a href="' .$_SITE['gcwu_cmblang_href_' . $_PAGE['lang'.$i]];
		echo '" lang="' .$_SITE['gcwu_langalt_' . $_PAGE['lang'.$i]];
		echo '">' . $_SITE['gcwu_cmblang_text_' . $_PAGE['lang'.$i]]; 
		echo '</a></li>';
	}
}
?>
</ul>
</div></div>
<div id="gcwu-gcnb-fip">
<div id="gcwu-sig"><div id="gcwu-sig-in"><object data="<?php echo $_SIG_IMG_; ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_SIG_ALT_; ?>" type="image/svg+xml"><img src="<?php echo $_SIG_IMG_; ?>.png" class="image-actual" alt="<?php echo $_SIG_ALT_; ?>" /></object></div></div>
<div id="gcwu-wmms"><div id="gcwu-wmms-in"><object data="<?php echo $_WMMS_IMG_; ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_WMMS_ALT_; ?>" type="image/svg+xml"><img src="<?php echo $_WMMS_ALT_; ?>.png" class="image-actual" alt="<?php echo $_WMMS_ALT_; ?>" /></object></div></div>
</div></div></div></nav>

<div id="gcwu-bnr" role="banner"><div id="gcwu-bnr-in">
<div id="gcwu-title"><p id="gcwu-title-in"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_site_title_' . $_PAGE['lang1']]; ?></a></p></div>

<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section role="search"><div id="gcwu-srchbx"><h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
    include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] ."/inc/search.php";
	echo '</div></section>';
}
?>
</div>
<?php
if( $_PAGE['sub_title_' . $_PAGE['lang1']] ) {
	echo '<div id="gcwu-subsite" class="gcwu-subsite-1">'."\n";
	echo '<p><a href="'.$_PAGE['sub_link_' . $_PAGE['lang1']].'">'.$_PAGE['sub_title_' . $_PAGE['lang1']]."</a></p>\n";
	echo '</div>';
}
?></div>
<?php
//if the site menu hasn't been set or the file can't be found set the no site menu flag
if( !isset($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ]) || (isset($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ])
 && ($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ]=="" || !file_exists($_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ])))) {
	$_PAGE['nositemenu'] = "1";
	echo "<h1 id=\"here\">".$_PAGE['wb_sitenav_file_' . $_PAGE['lang1']]."</h1>";
}

//if the bread crumb trail hasn't been set or the file can't be found set the nobcrumb
if( !isset($_SITE['wb_bcrumb_file']) || (isset($_SITE['wb_bcrumb_file']) && 
	($_SITE['wb_bcrumb_file'] == "" || !file_exists($_SITE['wb_bcrumb_file'])))) {
		$_PAGE['nobcrumb'] = "1";
}

//Handle the mega menu and bread crumb trail
if ($_PAGE['nositemenu'] != '1' || $_PAGE['nobcrumb'] != '1') { 

	echo '<nav role="navigation">' ."\n";
	if ($_PAGE['nositemenu'] != '1') {
		echo '<div id="gcwu-psnb"><h2>' . $_SITE['wb_sitenav_' . $_PAGE["lang1"]] .'</h2><div id="gcwu-psnb-in">';
		echo '<div class="wet-boew-menubar mb-mega"><div>';
	
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
		echo '</div></div></div></div>' ."\n";
	}
	
	if ($_PAGE['nobcrumb'] != '1') {
		echo '<div id="gcwu-bc"><h2>'.$_SITE['wb_bcrumb_' .$_PAGE['lang1'] ].'</h2><div id="gcwu-bc-in">' ."\n";
		echo "<ol>\n";
		include $_SITE['wb_bcrumb_file'];
	
		echo "</ol>\n";
		echo "</div></div>";
	}
	echo "</nav>";
}
?>
<!-- HeaderEnd -->
