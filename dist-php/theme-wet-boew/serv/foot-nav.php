<!-- FooterStart -->
<div id="wet-tc" class="span-8">
<ul>
<li class="wet-tc-left"><div class="span-4 row-start"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['wet_terms_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_SITE['wet_terms_text_' . $_PAGE['lang1']]; ?></a></div></li>
<?php
for($i=2; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['lang'.$i]) ) {
		$_Left_Or_Rigth = "wet-tc-right";
		$_ROW_END_ = " row-end";
		if( $i%2==1 ) {
			$_Left_Or_Rigth = "wet-tc-left";
			$_ROW_END_ = " row-start";
		}
		
		echo '<li class="'.$_Left_Or_Rigth.'" lang="'.$_SITE['wb_meta_'.$_PAGE['lang'.$i]].'">';
		echo '<div class="span-4'.$_ROW_END_.'"><a'.$_TARGET_.' href="'.$_SITE['wet_terms_href_' . $_PAGE['lang'.$i]].'" rel="license">'.$_SITE['wet_terms_text_' . $_PAGE['lang'.$i]];
		echo "</a></div></li>\n";
	}
}
?>
</ul>
<div class="clear"></div>
</div>
<!-- FooterEnd -->
