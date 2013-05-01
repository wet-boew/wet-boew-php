<?php
/* SPLASH PAGE BEGIN */
if( $_PAGE['issplash'] == 1 ) {
?>
<div id="wet-title">
<?php
	echo '<div id="wet-title-left" class="span-3 margin-bottom-none"'.$_META_LANG.'>';
	echo $_SITE['wb_site_title_'.$_PAGE['lang1']];
	echo "</div>\n";
	echo '<div class="span-2 margin-bottom-none"></div>'."\n";
	echo '<div id="wet-title-right" class="span-3 margin-bottom-none"'.$_META_LANG.'>';
	echo $_SITE['wb_site_title_'.$_PAGE['lang2']];
	echo "</div>\n";

	for($i=3; isset($_PAGE['lang'.$i]); $i++ ) {
		if( isset( $_SITE['wb_site_title_'.$_PAGE['lang'.$i]]) ) {
			$_Left_Or_Rigth = ( $i%2==1 )?"wet-alt-title-left":"wet-alt-title-right";
			$_META_LANG = "";
			if( $i > 1 ) {
				$_META_LANG = ' lang="'.$_SITE['wb_meta_'.$_PAGE['lang'.$i]].'"';
			}
			if( $i%2==0 ) {
				echo '<div class="span-2 margin-bottom-none"></div>'."\n";
			}

			echo '<div class="'.$_Left_Or_Rigth.' span-3 margin-bottom-none"'.$_META_LANG.'>';
			echo $_SITE['wb_site_title_'.$_PAGE['lang'.$i]];
			echo "</div>\n";
		}
	}
?>
<div class="clear"></div>
</div>
<?php } /* SPLASH PAGE END */?>