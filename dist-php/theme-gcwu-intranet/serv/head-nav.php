<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['gcwu_sig_image'].'-blk-' . $_PAGE['lang1'];
	$_SIG_FALL_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['gcwu_sig_image'].'-' . $_PAGE['lang1'];
	$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

	$_WMMS_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms-blk';
	$_WMMS_FALL_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms';
	$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
?>

<!-- HeaderStart -->
<div id="gcwu-title" class="span-8">
<div id="gcwu-sig" class="span-4 row-start"><div id="gcwu-sig-in"><object data="<?php echo $_SIG_IMG_ ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_SIG_ALT_ ?>" type="image/svg+xml"><img src="<?php echo $_SIG_FALL_IMG_ ?>.png" alt="<?php echo $_SIG_ALT_ ?>" /></object></div></div>
<div id="gcwu-wmms" class="span-4 row-end"><div id="gcwu-wmms-in"><object data="<?php echo $_WMMS_IMG_; ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_WMMS_ALT_; ?>" type="image/svg+xml"><img src="<?php echo $_WMMS_FALL_IMG_; ?>.png" alt="<?php echo $_WMMS_ALT_; ?>" /></object></div></div>
<div class="clear"></div>

<div id="gcwu-title-left" class="span-4 row-start"><a href="<?php echo $_SITE['wb_site_href_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_site_title_'.$_PAGE['lang1']]; ?></a></div>
<?php
for($i=2; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['lang'.$i]) ) {
		$_Left_Or_Rigth = "gcwu-title-right";
		$_ROW_END_ = " row-end";
		if( $i%2==1 ) {
			$_Left_Or_Rigth = "gcwu-title-left";
			$_ROW_END_ = " row-start";
		}
	
		echo '<div id="'.$_Left_Or_Rigth.'" class="span-4'.$_ROW_END_ .'" lang="'.$_SITE['wb_meta_'.$_PAGE['lang'.$i]].'">';
		echo '<a href="'.$_SITE['wb_site_href_'.$_PAGE['lang'.$i]].'">'.$_SITE['wb_site_title_'.$_PAGE['lang'.$i]].'</a>';
		echo "</div>\n";
	}
}
?>
<div class="clear"></div>
</div>
<!-- HeaderEnd -->