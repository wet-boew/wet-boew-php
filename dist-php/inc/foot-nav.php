<?php
                $_MOD_TEXT_ = $_SITE['wb_doc_dates_'.$_PAGE['lang1']];
                $_DATE_VERSION_TEXT_ = "<span><time>".$_PAGE['modified']."</time></span>";
                if( $_PAGE['isapp'] == "1" ) {
                                $_MOD_TEXT_ = $_SITE['wb_doc_version_' . $_PAGE['lang1']];
                                $_DATE_VERSION_TEXT_ = $_PAGE['version'];
                }
?>
    <dl id="wb-dtmd" role="contentinfo" property="dateModified">
        <dt><?php echo $_SITE['wb_doc_dates_'.$_PAGE['lang1']] ?></dt>
       <dd>
            <time><?php echo $_DATE_VERSION_TEXT_?></time>
        </dd>
    </dl>
</main>
<?php
if( isset($_PAGE['left_menu_gauche']) && $_PAGE['left_menu_gauche']!='' && file_exists($_PAGE['left_menu_gauche'])) {

        echo '<nav role="navigation" id="wb-sec" typeof="SiteNavigationElement" class="col-md-3 col-md-pull-9 visible-md visible-lg">';
		echo '<h2>'.$_SITE['wb_sec_'.$_PAGE['lang1']] .'</h2>' . "\n";
        echo '<!-- SecNavStart -->' . "\n";

        include_once $_PAGE['left_menu_gauche'];
        
        echo '<!-- SecNavEnd -->' . "\n";
        echo '</nav>' . PHP_EOL;
		echo '</div>';
		echo '</div>';
}
?>

<?php
if( $_PAGE['issplash'] != "1" ) {
	//use the content footers by default
	$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'];
	
	$_FOOT_INCLUDE_ = $_ROOT_PATH_ . "/inc/cont/foot.php";
	
	if( file_exists($_FOOT_INCLUDE_) ) {
		include_once $_FOOT_INCLUDE_;
	}
}
?>
<!-- ScriptsStart -->

<!--[if gte IE 9 | !IE ]><!-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/wet-boew.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]><script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/ie8-wet-boew2.min.js"></script><![endif]-->

<!-- ScriptsEnd -->

