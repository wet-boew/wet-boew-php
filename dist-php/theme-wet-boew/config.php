<?php
	$_SITE['wb_theme_folder'] = "/theme-gcwu-fegc";
	$_SITE['wb_core_dist_folder'] = "/wet-boew-dist/dist";
	$_SITE['wb_php_dist_folder'] = "/wet-boew-php/dist-php";
	
	include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/config.php";

	//Modify the language selection link to point to whatever script suits your site.
	$_SITE['wet_cmblang_href_eng'] = $_SITE['wet_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	$_SITE['wet_sig_image'] = "logo";
	$_SITE['wet_sig_eng'] = "";
	$_SITE['wet_sig_fra'] = "";
	
	$_SITE['wet_fullhd_text_eng'] = "Full-width header area";
	$_SITE['wet_fullhd_text_fra'] = "Secteur d'en-tête de plein-largeur";

	$_SITE['wet_cmblang_text_eng'] = "Français"; 
	$_SITE['wet_cmblang_text_fra'] = "English"; 
?>