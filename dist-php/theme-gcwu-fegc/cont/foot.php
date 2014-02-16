<footer role="contentinfo" id="wb-info" class="visible-md visible-lg">
<div class="container">
<nav role="navigation">
<h2><?php echo $_SITE['wb_foot_' .$_PAGE['lang1']] ;?></h2>
<ul id="gc-tctr" class="list-inline">
<li><a rel="license" href="<?php echo $_SITE['gcwu_terms_link_' .$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_terms_' .$_PAGE['lang1']]; ?></a></li>
<li><a href="<?php echo $_SITE['gcwu_transparency_link_' .$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_transparency_' .$_PAGE['lang1']]; ?></a></li>
</ul>
<div class="row">
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
</div>
</nav>
</div>
<div id="gc-info">
<div class="container">
<nav role="navigation">
<h2><?php echo $_SITE['gcwu_footer_'.$_PAGE['lang1']];?></h2>
<ul class="list-inline">
<li><a href="<?php echo $_SITE['gcwu_health_link_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_health_'.$_PAGE['lang1']]; ?></a></li>
<li><a href="<?php echo $_SITE['gcwu_travel_link_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_travel_'.$_PAGE['lang1']]; ?></a></li>
<li><a href="<?php echo $_SITE['gcwu_service_link_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_service_'.$_PAGE['lang1']]; ?></a></li>
<li><a href="<?php echo $_SITE['gcwu_job_link_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_job_'.$_PAGE['lang1']]; ?></a></li>
<li><a href="<?php echo $_SITE['gcwu_economy_link_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_economy_'.$_PAGE['lang1']]; ?></a></li>
<li id="canada-ca"><a href="<?php echo $_SITE['gcwu_canada_dot_ca_link_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_canada_dot_ca_'.$_PAGE['lang1']]; ?></a></li>
</ul>
</nav>
</div>
</div>
</footer>