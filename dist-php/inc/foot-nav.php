</section>
</main>

<?php
//if there's no secondary menu then the H2 element around the "Footer" gets the id="wb-nav" id
//Otherwise the secondary menu gets it.
$_FOOT_NAV_ = ' id="wb-nav"';

if( isset($_PAGE['left_menu_gauche'])  && $_PAGE['left_menu_gauche']!='' && file_exists($_PAGE['left_menu_gauche'])) {
	//clear the foot nav variable so it doesn't get added to the H2 in the footer below
	$_FOOT_NAV_ = "";

	echo '<div id="wb-sec"><div id="wb-sec-in"><nav role="navigation"><h2 id="wb-nav">'.$_SITE['wb_sec_'.$_PAGE['lang1']] .'</h2>' . "\n";
	echo '<div class="wb-sec-def">' . "\n";
	echo '<!-- SecNavStart -->' . "\n";

	include_once $_PAGE['left_menu_gauche'];
	
	echo '<!-- SecNavEnd -->' . "\n";
	echo '</div>' . "\n";
	echo '</nav></div></div>' . "\n";

}
?>
<footer role="contentinfo" id="wb-info" class="container visible-md visible-lg">
<nav role="navigation" class="row">
<h2><?php echo $_SITE['wb_foot_' .$_PAGE['lang1']] ;?></h2>
<?php
if( file_exists($_FOOT_INCLUDE_) ) {
	include_once $_FOOT_INCLUDE_;
}
?>
</footer>
<!-- ScriptsStart -->

<!--[if gte IE 9 | !IE ]><!-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/wet-boew.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]><script src="/wet-boew/js/ie8-wet-boew2.min.js"></script><![endif]-->

<!-- ScriptsEnd -->

