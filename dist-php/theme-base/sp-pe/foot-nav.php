<!-- FooterStart -->
<div id="base-tc" class="span-8">
<div class="span-6 grid-12 margin-bottom-none margin-top-none row-start row-end">
<ul id="base-ef-tc">
<li><div class="span-2 row-start"><a<?php echo $_TARGET_; ?> href="<?php echo $_SITE['base_terms_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_SITE['base_terms_text_' . $_PAGE['lang1']]; ?></a></div></li>
<?php
	echo '<li lang="'.$_SITE['wb_meta_'.$_PAGE['lang2']].'">';
	echo '<div class="span-2 row-end"><a'.$_TARGET_.' href="'.$_SITE['base_terms_href_' . $_PAGE['lang2']].'" rel="license">'.$_SITE['base_terms_text_' . $_PAGE['lang2']];
	echo "</a></div></li>\n";

?>
</ul>
</div>

<div class="clear"></div>
<?php
//print terms and conditions for other languages if they exists
if( isset($_PAGE['lang3']) ) {
	echo '<div class="span-8 grid-12 margin-bottom-none margin-top-none row-start row-end">';
	echo '<ul id="base-other-tc">';
	for($i=3; isset($_PAGE['lang'.$i]); $i++ ) {
		$_ROW_END_ = "";
		if( $i == 3 ) {
			$_ROW_END_ = " row-start";
		} else if( $i == 7 ) {
			$_ROW_END_ = " row-end";
		}
		
		echo '<li lang="'.$_SITE['wb_meta_'.$_PAGE['lang'.$i]].'">';
		echo '<div class="span-2'.$_ROW_END_.'"><a'.$_TARGET_.' href="'.$_SITE['base_terms_href_' . $_PAGE['lang'.$i]].'" rel="license">'.$_SITE['base_terms_text_' . $_PAGE['lang'.$i]];
		echo "</a></div></li>\n";
	}
	echo "</ul>\n</div>\n";
}
?>
</div>
<!-- FooterEnd -->