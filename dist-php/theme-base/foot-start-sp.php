<?php
	$_WMMS_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms-blk';
	$_WMMS_FALL_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/wmms';
	$_WMMS_ALT_ = $_SITE['base_wmms_' . $_PAGE['lang1'] ];
?>

<div id="base-lang"><nav role="navigation"><h2><?php echo $_SITE['base_langselect_'.$_PAGE['lang1']]; ?>
<?php
for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_SITE['base_langselect_'.$_PAGE['lang'.$i]]) ) {
		echo " / ";
		echo "<span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">".$_SITE['base_langselect_'.$_PAGE['lang'.$i]]."</span>";
	}
}
?>
</h2>
<div class="span-6 grid-12 margin-bottom-none">
<ul id="base-ef-lang">
<?php //buttons ?>
<li><div class="span-2 row-start margin-bottom-none"><a href="<?php echo $_SITE['wb_site_href_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['wb_lang_text_'.$_PAGE['lang1']]; ?></a></div></li>

<?php
echo '<li lang="'.$_SITE['wb_meta_'.$_PAGE['lang2']].'"><div class="span-2 row-end margin-bottom-none"><a href="'.$_SITE['wb_site_href_'.$_PAGE['lang2']].'">'.$_SITE['wb_lang_text_'.$_PAGE['lang2']]."</a></div></li>\n";
?>
</ul>
</div>
<?php //government signiture image ?>
<div id="base-wmms" class="span-2 margin-bottom-none"><div id="base-wmms-in"><object data="<?php echo $_WMMS_IMG_; ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_WMMS_ALT_; ?>" type="image/svg+xml"><img src="<?php echo $_WMMS_FALL_IMG_; ?>.png" alt="<?php echo $_WMMS_ALT_; ?>" /></object></div></div>
<?php
//Print buttons for the other languages if they exist.
if( isset($_PAGE['lang3']) ) {
	echo '<div class="span-8 grid-12 margin-bottom-none">';
	echo '<ul id="base-other-lang">' ."\n";
	for( $i=3; isset($_PAGE['lang'.$i]); $i++ ) {
		$_ROW_SE_ = "";
		if( $i == 3 ) {
			$_ROW_SE_ = " row-start";
		} else if( $i == 7 ) {
			$_ROW_SE_ = " row-end";
		}
		echo '<li lang="'.$_SITE['wb_meta_'.$_PAGE['lang'.$i]].'"><div class="span-2'.$_ROW_SE_.' margin-bottom-none"><a href="'.$_SITE['wb_site_href_'.$_PAGE['lang'.$i]].'">'.$_SITE['wb_lang_text_'.$_PAGE['lang'.$i]]."</a></div></li>\n";
	}
	echo "</ul>\n</div>\n";
}
?>
<div class="clear"></div>
</nav></div>
