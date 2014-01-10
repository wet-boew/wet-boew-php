</section>
</main>

<?php
//use the content footers by default
$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'];
$_INC_TYPE_ = 'cont';

if( $_PAGE['issplash'] == "1" ) {
	$_INC_TYPE_ = 'sp-pe';
}

$_FOOT_INCLUDE_ = $_ROOT_PATH_ . "/inc/".$_INC_TYPE_."/foot.php";

if( file_exists($_FOOT_INCLUDE_) ) {
	include_once $_FOOT_INCLUDE_;
}
?>
<!-- ScriptsStart -->

<!--[if gte IE 9 | !IE ]><!-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="<?php echo $_SITE['wb_core_dist_folder']; ?>/js/wet-boew.min.js"></script>
<!--<![endif]-->
<!--[if lt IE 9]><script src="/wet-boew/js/ie8-wet-boew2.min.js"></script><![endif]-->

<!-- ScriptsEnd -->

