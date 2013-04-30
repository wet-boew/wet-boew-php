<h1 id="wb-cont"><?php
$_TITLE_ = $_PAGE['short_title_' . $_PAGE['lang1']];
//if there's more than one language set then add the additioal title elements
for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['short_title_' . $_PAGE['lang'.$i]]) ) {
		$_TITLE_ .= " / <span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">" . $_PAGE['short_title_' . $_PAGE['lang'.$i]] ."</span>"; 
	}
}

echo $_TITLE_;
?></h1>

<?php
/* SPLASH PAGE BEGIN */
if( $_PAGE['issplash'] == 1 ) {
?>
<div id="gcwu-title">
<?php
	echo '<div id="gcwu-title-left" class="span-3 margin-bottom-none"'.$_META_LANG.'>';
	echo $_SITE['wb_site_title_'.$_PAGE['lang1']];
	echo "</div>\n";
	echo '<div class="span-2 margin-bottom-none"></div>'."\n";
	echo '<div id="gcwu-title-right" class="span-3 margin-bottom-none"'.$_META_LANG.'>';
	echo $_SITE['wb_site_title_'.$_PAGE['lang2']];
	echo "</div>\n";

	for($i=3; isset($_PAGE['lang'.$i]); $i++ ) {
		if( isset( $_SITE['wb_site_title_'.$_PAGE['lang'.$i]]) ) {
			$_Left_Or_Rigth = ( $i%2==1 )?"gcwu-alt-title-left":"gcwu-alt-title-right";
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