<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['ogpl_sig_image'];
	$_SIG_ALT_ = $_SITE['ogpl_sig_' . $_PAGE['lang1']];
?>

<!-- HeaderStart -->
<nav role="navigation"><section><div id="ogpl-fullhd"><h2><?php echo $_SITE['ogpl_gcnavbar_' .$_PAGE['lang1']]; ?></h2>
<div id="ogpl-fullhd-in">
<ul>
<?php
if( $_PAGE['nolang'] != "1" ) {
	for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
		echo '<li id="ogpl-fullhd-lang';
		if( $_PAGE['lang'.$i] == $_PAGE['lang1']) {
			echo '-current';
		} elseif( $i-1 >= 2 ) {
			echo "-" .($i-1);
		}
		echo '" lang="' .$_SITE['wb_meta_' . $_PAGE['lang'.$i]];
		echo '">';
		if( $_PAGE['lang'.$i] == $_LANG_) {
			echo $_SITE['ogpl_cmblang_text_' . $_PAGE['lang'.$i]]; 
		} else {
			echo '<a href="' .$_SITE['ogpl_cmblang_href_' . $_PAGE['lang'.$i]].'">';
			echo $_SITE['ogpl_cmblang_text_' . $_PAGE['lang'.$i]]; 
			echo '</a>';
		}
		echo '</li>';
	}
}
?>
</ul>
</div>
</div></section></nav>

<div id="ogpl-bnr" role="banner"><div id="ogpl-bnr-in">

<div id="ogpl-title"><p id="ogpl-title-in"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>"><img src="<?php echo $_SIG_IMG_ ?>.png" alt="<?php echo $_SIG_ALT_; ?>" /> <span><?php echo $_SITE['wb_site_title_' . $_PAGE['lang1']]; ?></span></a></p></div>
<?php
if( $_PAGE['nosearch'] != "1" ) {
	echo '<section role="search"><div id="ogpl-srchbx"><h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
    //include $_SITE['wb_search_file'];
    include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] ."/inc/search.php";
	echo '</div></section>';
}
?>
</div></div>

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
		echo '<div id="ogpl-psnb"><h2>' . $_SITE['wb_sitenav_' . $_PAGE["lang1"]] .'</h2><div id="ogpl-psnb-in">';
		echo '<div class="wet-boew-menubar mb-mega"><div>';
		
		include $_SITE['wb_sitenav_file_' . $_PAGE['lang1'] ];
	
		echo '</div></div></div></div>' ."\n";
	}
	
	if ($_PAGE['nobcrumb'] != '1') {
		echo '<div id="ogpl-bc"><h2>'.$_SITE['wb_bcrumb_' .$_PAGE['lang1'] ].'</h2><div id="ogpl-bc-in">' ."\n";
		echo "<ol>\n";
		include $_SITE['wb_bcrumb_file'];
	
		echo "</ol>\n";
		echo "</div></div>";
	}
	echo "</nav>";
}
?>
<!-- HeaderEnd -->
