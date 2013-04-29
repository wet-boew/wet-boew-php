<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['wet_logo_image'];
	$_SIG_ALT_ = $_SITE['wet_logo_' . $_PAGE['lang1']];
?>
<!-- HeaderStart -->
<section><div id="wet-fullhd"><h2><?php echo $_SITE['wet_fullhd_text_'.$_PAGE['lang1']]; ?></h2>
<div id="wet-fullhd-in">
<ul>
<?php
if( $_PAGE['nolang'] != "1" ) {
	for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
		echo '<li id="wet-fullhd-lang';
		if( $i > 1 ) {
			echo "-" .$i;
		} else {
			echo "-current";
		}
		echo '">';
		echo '<a href="' .$_SITE['wet_cmblang_href_' . $_PAGE['lang'.$i]];
		if( $i > 1 ) {
			echo '" lang="' .$_SITE['wb_meta_' . $_PAGE['lang'.$i]];
		}
		echo '">' . $_SITE['wet_cmblang_text_' . $_PAGE['lang'.$i]]; 
		echo "</a></li>\n";
	}
}
?>
</ul>
</div>
</div></section>

<div id="wet-bnr" role="banner"><div id="wet-bnr-in">
<div id="wet-title"><p id="wet-title-in"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>"><object data="<?php echo $_SIG_IMG_ ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_SIG_ALT_ ?>" type="image/svg+xml"><img src="<?php echo $_SIG_IMG_ ?>.png" alt="<?php echo $_SIG_ALT_ ?>" /></object>
<?php echo $_SITE['wb_site_title_' . $_PAGE['lang1']]; ?></a></p></div>

<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section role="search"><div id="wet-srchbx"><h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
    include $_SITE['wb_search_file']; 
	echo '</div></section>';
}
?>
</div></div>

<?php
//Handle the mega menu and bread crumb trail
if ($_PAGE['nositemenu'] != '1' || $_PAGE['bcrumb_hide'] != '1') { 

	echo '<nav role="navigation">' ."\n";
	if ($_PAGE['nositemenu'] != '1') {
		echo '<div id="wet-psnb"><h2>' . $_SITE['wb_sitenav_' . $_PAGE["lang1"]] .'</h2><div id="wet-psnb-in">';
	
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
		echo '</div></div>' ."\n";
	}
	
	if ($_PAGE['bcrumb_hide'] != '1') {
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
