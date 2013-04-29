<?php
	$_SITE['wb_theme_folder'] = "/theme-wet-boew";
	$_SITE['wb_core_dist_folder'] = "/wet-boew-dist/dist";
	$_SITE['wb_php_dist_folder'] = "/wet-boew-php/dist-php";
	
	include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/config.php";

	$_SITE['wb_site_title_eng'] = "<span>PHP Variant <small>Collaborative open source project led by the Government of Canada</small></span>";
	$_SITE['wb_site_title_fra'] = "<span>Boîte à outils de l'expérience Web&#160;(BOEW)</span>";
	$_SITE['wet_logo_eng'] = ""; 
	$_SITE['wet_logo_fra'] = ""; 
	$_SITE['wet_logo_image'] = "logo"; 

	$_SITE['wet_fullhd_text_eng'] = "Full-width header area";
	$_SITE['wet_fullhd_text_fra'] = "Secteur d'en-tête de plein-largeur";

	//Modify the language selection link to point to whatever script suits your site.
	$_SITE['wet_cmblang_href_eng'] = $_SITE['wet_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	$_SITE['wet_cmblang_title_eng'] = "Français - Version française de cette page"; 
	$_SITE['wet_cmblang_title_fra'] = "English - English version of the Web page"; 
	$_SITE['wet_cmblang_text_eng'] = "English"; 
	$_SITE['wet_cmblang_text_fra'] = "Français"; 
	
	$_SITE['wet_cmblang_title_site_eng'] = "English - English version of the Web site"; 
	$_SITE['wet_cmblang_title_site_fra'] = "Français - Version française de ce site Web";

	$_SITE['wet_terms_href_eng'] = "#"; 
	$_SITE['wet_terms_href_fra'] = "#"; 
	$_SITE['wet_terms_text_eng'] = "Terms and conditions"; 
	$_SITE['wet_terms_text_fra'] = "Avis"; 

	$_SITE['wet_trans_href_eng'] = "#"; 
	$_SITE['wet_trans_href_fra'] = "#"; 
	$_SITE['wet_trans_text_eng'] = "Transparency"; 
	$_SITE['wet_trans_text_fra'] = "Transparence"; 

	/* Support for other languages, only necessary for multilingual demos */
	$_SITE['wet_terms_href_deu'] = "#"; 
	$_SITE['wet_terms_text_deu'] = "Begriffe und gewöhnt"; 

	$_SITE['wet_terms_href_spa'] = "#"; 
	$_SITE['wet_terms_text_spa'] = "Términos y condiciones"; 

	$_SITE['wet_terms_href_ita'] = "#"; 
	$_SITE['wet_terms_text_ita'] = "Termini e condiziona"; 

	$_SITE['wet_terms_href_por'] = "#"; 
	$_SITE['wet_terms_text_por'] = "Termos e condiciona"; 

	$_SITE['wet_terms_href_rus'] = "#"; 
	$_SITE['wet_terms_text_rus'] = "Сроки и условия"; 
		
	$_SITE['wet_langselect_eng'] = "Language selection links"; 
	$_SITE['wet_langselect_fra'] = "Liens de sélection de langue"; 
?>