<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['wet_sig_image'];
	$_SIG_ALT_ = $_SITE['wet_sig_' . $_PAGE['lang1']];
?>
<!-- HeaderStart -->
<section><div id="wet-fullhd"><h2><?php echo $_SITE['wet_fullhd_text_'.$_PAGE['lang1']]; ?></h2>
<div id="wet-fullhd-in">
<ul>
<?php
if( $_PAGE['nolang'] != "1" ) {
	for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
		echo '<li id="wet-fullhd-lang';
		if( $i >= 2 ) {
			echo "-" .$i;
		} else {
			echo "-current";
		}
		echo '">';
		echo '<a href="' .$_SITE['wet_cmblang_href_' . $_PAGE['lang'.$i]];
		echo '" lang="' .$_SITE['wb_meta_' . $_PAGE['lang'.$i]];
		echo '">' . $_SITE['wet_cmblang_text_' . $_PAGE['lang'.$i]]; 
		echo "</a></li>\n";
	}
}
?>
</ul>
</div>
</div></section>

<div id="wet-bnr" role="banner"><div id="wet-bnr-in">
<div id="wet-title"><p id="wet-title-in"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>"><object data="<?php echo $_SIG_IMG_; ?>.svg" role="img" tabindex="-1" type="image/svg+xml"><img src="<?php echo $_SIG_IMG_; ?>.png" alt="<?php echo $_SIG_ALT_; ?>" /></object><span><?php echo $_SITE['wb_site_title_' . $_PAGE['lang1']]; ?></span></a></p></div>

<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section role="search"><div id="wet-srchbx"><h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
    include $_SITE['wb_search_file']; 
	echo '</div></section>';
}
?>
</div>
<?php
if( $_PAGE['sub_title_' . $_PAGE['lang1']] ) {
	echo '<div id="wet-subsite" class="wet-subsite-1">'."\n";
	echo '<p><a href="'.$_PAGE['sub_link_' . $_PAGE['lang1']].'">'.$_PAGE['sub_title_' . $_PAGE['lang1']]."</a></p>\n";
	echo '</div>';
}
?></div>
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

//Handle the mega menu and bread crumb trail
if ($_PAGE['nositemenu'] != '1' || $_PAGE['nobcrumb'] != '1') { 

	echo '<nav role="navigation">' ."\n";
	if ($_PAGE['nositemenu'] != '1') {
		echo '<div id="wet-psnb"><h2>' . $_SITE['wb_sitenav_' . $_PAGE["lang1"]] .'</h2><div id="wet-psnb-in">';
		echo '<div class="wet-boew-menubar mb-mega"><div>';
	
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
		echo '</div></div></div></div>' ."\n";
	}
	
	if ($_PAGE['nobcrumb'] != '1') {
		echo '<div id="wet-bc"><h2>'.$_SITE['wb_bcrumb_' .$_PAGE['lang1'] ].'</h2><div id="wet-bc-in">' ."\n";
		echo "<ol>\n";
		include $_SITE['wb_bcrumb_file'];
	
		echo "</ol>\n";
		echo "</div></div>";
	}
	echo "</nav>";
}
?>
<!-- HeaderEnd -->
