<!-- FooterStart -->
<nav role="navigation"><div id="wet-sft"><h3><?php echo $_SITE['wb_sitefooter_' .$_PAGE['lang1'] ]; ?></h3><div id="wet-sft-in">
<div class="clear"></div>
<?php

//add the four required footer menus
for( $i=1; isset($_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']]); $i++ ) {
	$_LINK_ = $_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']];
	$_TEXT_ = $_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']];
	$_MENU_ = $_SITE['wb_ft'.$i.'_menu_file_'.$_PAGE['lang1']];
	echo '<div class="span-2"><div class="wet-col-head"><a'.$_TARGET_.' href="'.$_LINK_.'">'.$_TEXT_.'</a></div>';
	if( file_exists($_MENU_) ) {
		include $_MENU_;
	}
	echo "</div>";
}
?>
</div></div></nav>

<!-- FooterEnd -->
