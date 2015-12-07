<footer role="contentinfo" id="wb-info" class="container visible-md visible-lg">
<nav role="navigation" class="row">
<h2><?php echo $_SITE['wb_foot_' .$_PAGE['lang1']] ;?></h2>

<!-- FooterStart -->
<?php

//add the four required footer menus
for( $i=1; isset($_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']]); $i++ ) {
	//escapes to the next iteration if the menu is empty
	if (empty($_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']])) {
		continue;
	}
	
    $_TEXT_ = $_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']];
     echo '<section class="col-sm-3"><h3>'.$_TEXT_.'</h3>'.PHP_EOL;

    $_MENU_ = $_SITE['wb_ft'.$i.'_menu_file_'.$_PAGE['lang1']];
    if( file_exists($_MENU_) ) {
        include $_MENU_;
    }
    echo '</section>'.PHP_EOL;
}
?>
<!-- FooterEnd -->
</nav>
</footer>