<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['gcwu_sig_image'].'-' . $_PAGE['lang1'];
	$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

	$_WMMS_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms';
	$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
?>

<!-- HeaderStart -->
<nav role="navigation"><div id="gcwu-gcnb"><h2><?php echo $_SITE['gcwu_gcnavbar_' .$_PAGE['lang1']]; ?></h2>
<div id="gcwu-gcnb-in"><div id="gcwu-gcnb-fip">
<div id="gcwu-sig"><div id="gcwu-sig-in"><object data="<?php echo $_SIG_IMG_ ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_SIG_ALT_ ?>" type="image/svg+xml"><img src="<?php echo $_SIG_IMG_ ?>.png" alt="<?php echo $_SIG_ALT_ ?>" /></object></div></div>
<ul>
<?php
//print the links that appear in the black navigation bar
for($i=1; isset($_SITE['gcwu_gcnb' .$i .'_href_'.$_PAGE['lang1'] ]); $i++ ) {
	$_LINK_ = $_SITE['gcwu_gcnb' .$i .'_href_'.$_PAGE['lang1'] ];
	$_TEXT_ = $_SITE['gcwu_gcnb' .$i .'_text_'.$_PAGE['lang1'] ];
	echo '<li id="gcwu-gcnb'.$i.'"><a'.$_TARGET_.' rel="external" href="'.$_LINK_.'">' .$_TEXT_ ."</a></li>\n";
}

if( $_PAGE['nolang'] != "1" ) {
	echo '<li id="gcwu-gcnb-lang">';
	echo '<a href="' .$_SITE['gcwu_cmblang_href_' . $_PAGE['lang1']];
	echo '" lang="' .$_SITE['gcwu_langalt_' . $_PAGE['lang1']];
	echo '">' . $_SITE['gcwu_cmblang_text_' . $_PAGE['lang1']]; 
	echo '</a></li>';
}
?>
</ul>
</div></div></div></nav>

<div id="gcwu-bnr" role="banner"><div id="gcwu-bnr-in">
<div id="gcwu-wmms"><div id="gcwu-wmms-in"><object data="<?php echo $_WMMS_IMG_; ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_WMMS_ALT_; ?>" type="image/svg+xml"><img src="<?php echo $_WMMS_IMG_; ?>.png" alt="<?php echo $_WMMS_ALT_; ?>" /></object></div></div>

<div id="gcwu-title"><p id="gcwu-title-in"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_site_title_' . $_PAGE['lang1']]; ?></a></p></div>
<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section role="search"><div id="gcwu-srchbx"><h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
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
		echo '<div id="gcwu-psnb"><h2>' . $_SITE['wb_sitenav_' . $_PAGE["lang1"]] .'</h2><div id="gcwu-psnb-in">';
	
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
		echo '</div></div>' ."\n";
	}
	
	if ($_PAGE['bcrumb_hide'] != '1') {
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
