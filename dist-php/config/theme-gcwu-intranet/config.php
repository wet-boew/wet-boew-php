<?php
	//set the theme folder, this could be set programaticlly, but
	//this configuration file is unfortunately differnt for each
	//theme anyway.
	$_SITE['wb_theme_folder'] = "/theme-gcwu-intranet";

	/*
	 * Path to the distribution /inc/config.php file containing the common
	 * in the demo this is programatically defined demonstrating one method
	 * of including the configuration file. This could also be hardcoded
	 */
	$_INC_CONFIG = realpath(dirname(__FILE__));

	//if this is a windows machine use the backslash, otherwise use forwardslash
	$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
	$_INC_CONFIG = substr($_INC_CONFIG, 0, strrpos($_INC_CONFIG, $_SLASH_)) ."/config.php";

	require $_INC_CONFIG;

	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	$_SITE['gcwu_cmblang_href_en'] = $_SITE['gcwu_cmblang_href_fr'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//Modify Terms and conditions and Transparency links 
	$_SITE['gcwu_terms_href_en'] = "#"; 
	$_SITE['gcwu_terms_href_fr'] = "#"; 

	$_SITE['gcwu_trans_href_en'] = "#"; 
	$_SITE['gcwu_trans_href_fr'] = "#"; 

	//Terms and conditions and transparency text
	$_SITE['gcwu_terms_text_en'] = "Terms and conditions"; 
	$_SITE['gcwu_terms_text_fr'] = "Avis"; 

	$_SITE['gcwu_trans_text_en'] = "Transparency"; 
	$_SITE['gcwu_trans_text_fr'] = "Transparence"; 

	//sets the name of the signature image and alt text used in the top left of the theme
	$_SITE['gcwu_sig_image'] = "sig"; 
	$_SITE['gcwu_sig_en'] = "Government of Canada"; 
	$_SITE['gcwu_sig_fr'] = "Gouvernement du Canada"; 

	//alt text used for the "Canada" logo that appears about the search tool
	$_SITE['gcwu_wmms_en'] = "Symbol of the Government of Canada"; 
	$_SITE['gcwu_wmms_fr'] = "Symbole du gouvernement du Canada"; 

	//hidden text used for accessibility
	$_SITE['gcwu_gcnavbar_en'] = "Government of Canada navigation bar"; 
	$_SITE['gcwu_gcnavbar_fr'] = "Barre de navigation de la gouvernement de Canada"; 
	$_SITE['gcwu_gcfooter_en'] = "Government of Canada footer"; 
	$_SITE['gcwu_gcfooter_fr'] = "Pied de page du gouvernement du Canada"; 
	
	//links that appear at the very top of the page for this theme
	$_SITE['gcwu_gcnb1_href_en'] = "#"; 
	$_SITE['gcwu_gcnb1_href_fr'] = "#"; 
	$_SITE['gcwu_gcnb1_text_en'] = "Custom link"; 
	$_SITE['gcwu_gcnb1_text_fr'] = "Lien personnalisé"; 

	$_SITE['gcwu_gcnb2_href_en'] = "#"; 
	$_SITE['gcwu_gcnb2_href_fr'] = "#"; 
	$_SITE['gcwu_gcnb2_text_en'] = "Custom link"; 
	$_SITE['gcwu_gcnb2_text_fr'] = "Lien personnalisé"; 
	
	$_SITE['gcwu_gcnb3_href_en'] = "#"; 
	$_SITE['gcwu_gcnb3_href_fr'] = "#"; 
	$_SITE['gcwu_gcnb3_text_en'] = "Custom link"; 
	$_SITE['gcwu_gcnb3_text_fr'] = "Lien personnalisé"; 
	
	//button and language swap text
	$_SITE['gcwu_cmblang_text_fr'] = "Français";
	$_SITE['gcwu_cmblang_text_en'] = "English"; 
	$_SITE['gcwu_cmblang_title_en'] = "Français - Version française de cette page"; 
	$_SITE['gcwu_cmblang_title_fr'] = "English - English version of the Web page"; 

	//links that appear at the very bottom of the page for this theme
	$_SITE['gcwu_trail1_href_en'] = "http://healthycanadians.gc.ca/index-en.php"; 
	$_SITE['gcwu_trail1_href_fr'] = "http://canadiensensante.gc.ca/index-fr.php"; 
	$_SITE['gcwu_trail1_text_en'] = "Health"; 
	$_SITE['gcwu_trail1_text_fr'] = "Santé"; 
	$_SITE['gcwu_trail1_textsub_en'] = "healthycanadians.gc.ca"; 
	$_SITE['gcwu_trail1_textsub_fr'] = "canadiensensante.gc.ca"; 

	$_SITE['gcwu_trail2_href_en'] = "http://www.voyage.gc.ca/index-en.asp"; 
	$_SITE['gcwu_trail2_href_fr'] = "http://www.voyage.gc.ca/index-fr.asp"; 
	$_SITE['gcwu_trail2_text_en'] = "Travel"; 
	$_SITE['gcwu_trail2_text_fr'] = "Voyage"; 
	$_SITE['gcwu_trail2_textsub_en'] = "travel.gc.ca"; 
	$_SITE['gcwu_trail2_textsub_fr'] = "voyage.gc.ca"; 

	$_SITE['gcwu_trail3_href_en'] = "http://www.servicecanada.gc.ca/eng/home.shtml"; 
	$_SITE['gcwu_trail3_href_fr'] = "http://www.servicecanada.gc.ca/fra/accueil.shtml"; 
	$_SITE['gcwu_trail3_text_en'] = "Service Canada"; 
	$_SITE['gcwu_trail3_text_fr'] = "Service Canada"; 
	$_SITE['gcwu_trail3_textsub_en'] = "servicecanada.gc.ca"; 
	$_SITE['gcwu_trail3_textsub_fr'] = "servicecanada.gc.ca"; 

	$_SITE['gcwu_trail4_href_en'] = "http://www.jobbank.gc.ca/intro-en.aspx"; 
	$_SITE['gcwu_trail4_href_fr'] = "http://www.guichetemplois.gc.ca/Intro-fr.aspx"; 
	$_SITE['gcwu_trail4_text_en'] = "Jobs"; 
	$_SITE['gcwu_trail4_text_fr'] = "Emplois"; 
	$_SITE['gcwu_trail4_textsub_en'] = "jobbank.gc.ca"; 
	$_SITE['gcwu_trail4_textsub_fr'] = "guichetemplois.gc.ca"; 
	
	$_SITE['gcwu_trail5_href_en'] = "http://actionplan.gc.ca/en"; 
	$_SITE['gcwu_trail5_href_fr'] = "http://plandaction.gc.ca/fr"; 
	$_SITE['gcwu_trail5_text_en'] = "Economy"; 
	$_SITE['gcwu_trail5_text_fr'] = "Économie"; 
	$_SITE['gcwu_trail5_textsub_en'] = "actionplan.gc.ca"; 
	$_SITE['gcwu_trail5_textsub_fr'] = "plandaction.gc.ca"; 

	$_SITE['gcwu_trail_canada_href_en'] = "http://www.canada.gc.ca/menu-en.html"; 
	$_SITE['gcwu_trail_canada_href_fr'] = "http://www.canada.gc.ca/menu-fr.html"; 
	$_SITE['gcwu_trail_canada_text_en'] = "Canada.gc.ca"; 
	$_SITE['gcwu_trail_canada_text_fr'] = "Canada.gc.ca"; 

	/* Support for other languages, only necessary for multilingual demos */
	$_SITE['gcwu_cmblang_text_es'] = "español";

	$_SITE['gcwu_terms_href_de'] = "#"; 
	$_SITE['gcwu_terms_text_de'] = "Begriffe und gewöhnt"; 

	$_SITE['gcwu_terms_href_es'] = "#"; 
	$_SITE['gcwu_terms_text_es'] = "Términos y condiciones"; 

	$_SITE['gcwu_terms_href_it'] = "#"; 
	$_SITE['gcwu_terms_text_it'] = "Termini e condiziona"; 

	$_SITE['gcwu_terms_href_pt'] = "#"; 
	$_SITE['gcwu_terms_text_pt'] = "Termos e condiciona"; 

	$_SITE['gcwu_terms_href_ru'] = "#"; 
	$_SITE['gcwu_terms_text_ru'] = "Сроки и условия"; 
		
	$_SITE['gcwu_langselect_en'] = "Language selection links"; 
	$_SITE['gcwu_langselect_fr'] = "Liens de sélection de langue"; 
	$_SITE['gcwu_hidebtarrow'] = "1"; 
?>