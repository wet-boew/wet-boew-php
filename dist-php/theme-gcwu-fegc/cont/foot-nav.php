<!-- FooterStart -->
<nav role="navigation"><div id="gcwu-sft"><h3><?php echo $_SITE['wb_sitefooter_' .$_PAGE['lang1'] ]; ?></h3><div id="gcwu-sft-in">
<div id="gcwu-tctr">
<ul>
<li class="gcwu-tc"><a<?php echo $_TARGET_ ?> href="<?php echo $_SITE['gcwu_terms_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_SITE['gcwu_terms_text_' . $_PAGE['lang1']]; ?></a></li>
<li class="gcwu-tr"><a<?php echo $_TARGET_ ?> href="<?php echo $_SITE['gcwu_trans_href_' . $_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_trans_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div>
<div class="clear"></div>
<?php

//add the four required footer menus
for( $i=1; isset($_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']]); $i++ ) {
    if (empty($_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']])) {
        continue;
    }

    $_TEXT_ = $_SITE['wb_ft'.$i.'_text_'.$_PAGE['lang1']];
    $_LINK_ = null;
    if( isset($_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']]) ) {
        $_LINK_ = $_SITE['wb_ft'.$i.'_href_'.$_PAGE['lang1']];
    }
    if (strlen($_LINK_) > 0) {
        // Add link to text only if available
        $_TEXT_ = '<a'.$_TARGET_.' href="'.$_LINK_ .'">'.$_TEXT_.'</a>';
    }
    echo '<section><div class="span-2"><h4 class="gcwu-col-head">'.$_TEXT_.'</h4>'.PHP_EOL;

    $_MENU_ = $_SITE['wb_ft'.$i.'_menu_file_'.$_PAGE['lang1']];
    if( file_exists($_MENU_) ) {
        include $_MENU_;
    }
    echo '</div></section>'.PHP_EOL;
}
?>
</div></div></nav>

<nav role="navigation"><div id="gcwu-gcft"><h3><?php echo $_SITE['gcwu_gcfooter_' . $_PAGE['lang1']]; ?></h3><div id="gcwu-gcft-in"><div id="gcwu-gcft-fip">
<ul>
<?php
//add the government of canada links in the black navigation menu at the bottom of the page
for( $i=1; isset($_SITE['gcwu_trail'.$i.'_href_'.$_PAGE['lang1']]); $i++ ) {
	$_LINK_ = $_SITE['gcwu_trail'.$i.'_href_'.$_PAGE['lang1']];
	$_TEXT_ = $_SITE['gcwu_trail'.$i.'_text_'.$_PAGE['lang1']];
	echo '<li><a'.$_TARGET_.' rel="external" href="' .$_LINK_. '"><span>'.$_TEXT_."</span></a></li>\n";
}
?>
<li id="gcwu-gcft-ca"><div><a<?php echo $_TARGET_ ?> rel="external" href="<?php echo $_SITE['gcwu_trail_canada_href_'.$_PAGE['lang1']]; ?>"><?php echo $_SITE['gcwu_trail_canada_text_'.$_PAGE['lang1']]; ?></a></div></li>
</ul>
</div></div></div></nav>
<!-- FooterEnd -->
