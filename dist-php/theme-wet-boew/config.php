<?php
	$_SITE['wb_theme_folder'] = "/theme-wet-boew";
	$_SITE['wb_core_dist_folder'] = "/wet-boew-dist/dist";
	$_SITE['wb_php_dist_folder'] = "/wet-boew-php/dist-php";
	
	include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/inc/config.php";

	$_SITE['wb_site_title_eng'] = "<span>PHP Variant <small>Collaborative open source project led by the Government of Canada</small></span>";
	$_SITE['wet_logo_eng'] = ""; 
	$_SITE['wet_logo_fra'] = ""; 
	$_SITE['wet_logo_image'] = "logo"; 

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
	
	$_SITE['wet_trail1_href_eng'] = "http://healthycanadians.gc.ca/index-eng.php"; 
	$_SITE['wet_trail1_href_fra'] = "http://canadiensensante.gc.ca/index-fra.php"; 
	$_SITE['wet_trail1_text_eng'] = "Health"; 
	$_SITE['wet_trail1_text_fra'] = "Santé"; 
	$_SITE['wet_trail1_textsub_eng'] = "healthycanadians.gc.ca"; 
	$_SITE['wet_trail1_textsub_fra'] = "canadiensensante.gc.ca"; 

	$_SITE['wet_trail2_href_eng'] = "http://www.voyage.gc.ca/index-eng.asp"; 
	$_SITE['wet_trail2_href_fra'] = "http://www.voyage.gc.ca/index-fra.asp"; 
	$_SITE['wet_trail2_text_eng'] = "Travel"; 
	$_SITE['wet_trail2_text_fra'] = "Voyage"; 
	$_SITE['wet_trail2_textsub_eng'] = "travel.gc.ca"; 
	$_SITE['wet_trail2_textsub_fra'] = "voyage.gc.ca"; 

	$_SITE['wet_trail3_href_eng'] = "http://www.servicecanada.gc.ca/eng/home.shtml"; 
	$_SITE['wet_trail3_href_fra'] = "http://www.servicecanada.gc.ca/fra/accueil.shtml"; 
	$_SITE['wet_trail3_text_eng'] = "Service Canada"; 
	$_SITE['wet_trail3_text_fra'] = "Service Canada"; 
	$_SITE['wet_trail3_textsub_eng'] = "servicecanada.gc.ca"; 
	$_SITE['wet_trail3_textsub_fra'] = "servicecanada.gc.ca"; 

	$_SITE['wet_trail4_href_eng'] = "http://www.jobbank.gc.ca/intro-eng.aspx"; 
	$_SITE['wet_trail4_href_fra'] = "http://www.guichetemplois.gc.ca/Intro-fra.aspx"; 
	$_SITE['wet_trail4_text_eng'] = "Jobs"; 
	$_SITE['wet_trail4_text_fra'] = "Emplois"; 
	$_SITE['wet_trail4_textsub_eng'] = "jobbank.gc.ca"; 
	$_SITE['wet_trail4_textsub_fra'] = "guichetemplois.gc.ca"; 
	
	$_SITE['wet_trail5_href_eng'] = "http://actionplan.gc.ca/en"; 
	$_SITE['wet_trail5_href_fra'] = "http://plandaction.gc.ca/fr"; 
	$_SITE['wet_trail5_text_eng'] = "Economy"; 
	$_SITE['wet_trail5_text_fra'] = "Économie"; 
	$_SITE['wet_trail5_textsub_eng'] = "actionplan.gc.ca"; 
	$_SITE['wet_trail5_textsub_fra'] = "plandaction.gc.ca"; 

	$_SITE['wet_trail_canada_href_eng'] = "http://www.canada.gc.ca/menu-eng.html"; 
	$_SITE['wet_trail_canada_href_fra'] = "http://www.canada.gc.ca/menu-fra.html"; 
	$_SITE['wet_trail_canada_text_eng'] = "Canada.gc.ca"; 
	$_SITE['wet_trail_canada_text_fra'] = "Canada.gc.ca"; 
	
	$_SITE['wet_langselect_eng'] = "Language selection links"; 
	$_SITE['wet_langselect_fra'] = "Liens de sélection de langue"; 
?>