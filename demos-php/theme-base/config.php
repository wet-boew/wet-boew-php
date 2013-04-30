<?php
	$_SITE['wb_theme_folder'] = "/theme-base";
	$_SITE['wb_core_dist_folder'] = "/dist";
	$_SITE['wb_php_dist_folder'] = "/dist-php";
	
	include_once $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/config.php";
	
	//Modify the language selection link to point to whatever script suits your site.
	$_SITE['base_cmblang_href_eng'] = $_SITE['base_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 
	$_SITE['base_cmblang_href_spa'] = "#";

	$_SITE['base_cmblang_title_eng'] = "Français - Version française de cette page"; 
	$_SITE['base_cmblang_title_fra'] = "English - English version of the Web page"; 

	$_SITE['base_cmblang_text_eng'] = "English"; 
	$_SITE['base_cmblang_text_fra'] = "Français"; 
	$_SITE['base_cmblang_text_spa'] = "español"; 
	
	$_SITE['base_cmblang_title_site_eng'] = "English - English version of the Web site"; 
	$_SITE['base_cmblang_title_site_fra'] = "Français - Version française de ce site Web";

	$_SITE['base_fullhd_text_eng'] = "Full-width header area";
	$_SITE['base_mobile_hide1_text_eng'] = "id=\"base-fullhd\"";
	$_SITE['base_mobile_hide2_text_eng'] = "id=\"base-fullhd-in\"";
	$_SITE['base_mobile_hide3_text_eng'] = "id=\"base-fullft\"";
	
	$_SITE['base_sft_text_eng'] = "Site footer";
	$_SITE['base_fullft_text_eng'] = "Full-width footer area";
	$_SITE['base_fullft_in_text_eng'] = "id=\"base-fullft-in\"";
	
	$_SITE['base_fullhd_text_fra'] = "Full-width header area";
	$_SITE['base_mobile_hide1_text_fra'] = "id=\"base-fullhd\"";
	$_SITE['base_mobile_hide2_text_fra'] = "id=\"base-fullhd-in\"";
	$_SITE['base_mobile_hide3_text_fra'] = "id=\"base-fullft\"";
	
	$_SITE['base_sft_text_fra'] = "Site footer";
	$_SITE['base_fullft_text_fra'] = "Full-width footer area";
	$_SITE['base_fullft_in_text_fra'] = "id=\"base-fullft-in\"";

	$_SITE['base_fullhd_link_spa'] = "#";
	$_SITE['base_fullhd_link_fra'] = "cont-fra.html";
	$_SITE['base_fullhd_link_fra'] = "cont-fra.html";
 
?>