<?php
//determine which theme footer should be used
$_FOOT_START_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] .$_SITE['wb_theme_folder'] ."/foot-start-reg.php";

if( $_PAGE['isserv'] == "1") {
	$_FOOT_START_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] .$_SITE['wb_theme_folder'] ."/foot-start-serv.php";
} else if( $_PAGE['issplash'] == "1") {
	$_FOOT_START_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] .$_SITE['wb_theme_folder'] ."/foot-start-sp.php";
}

include_once $_FOOT_START_;
?>

<div class="clear"></div>
</div></div>
