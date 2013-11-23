<?php
	//set the theme folder, this could be set programmatically, but
	//this configuration file is unfortunately different for each
	//theme anyway.
	$_SITE['wb_theme_folder'] = "/theme-ogpl";

	/*
	 * Path to the distribution /inc/config.php file containing the common
	 * in the demo this is programatically defined demonstrating one method
	 * of including the configuration file. This could also be hard-coded
	 */
	$_INC_CONFIG = realpath(dirname(__FILE__));

	//if this is a windows machine use the backslash, otherwise use forward slash
	$_SLASH_ = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"\\":"/";
	$_INC_CONFIG = substr($_INC_CONFIG, 0, strrpos($_INC_CONFIG, $_SLASH_)) ."/config.php";

	require $_INC_CONFIG;

	//Modify the language selection link to point to whatever script suits your 
	//site or keep the default language script
	$_SITE['ogpl_cmblang_href_en'] = $_SITE['ogpl_cmblang_href_fr'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//sets the name of the logo  image and alt text used in the top left of the theme
	$_SITE['ogpl_sig_image'] = "theme103_logo"; 
	$_SITE['ogpl_sig_en'] = "Open Government Platform"; 
	$_SITE['ogpl_sig_fr'] = "Plate-forme de gouvernement ouvert"; 

	//hidden text used for accessibility
	$_SITE['ogpl_gcnavbar_en'] = "Navigation bar"; 
	$_SITE['ogpl_gcnavbar_fr'] = "Barre de navigation"; 
	$_SITE['ogpl_gcfooter_en'] = "Footer"; 
	$_SITE['ogpl_gcfooter_fr'] = "Pied de page"; 
	
	//button and language swap text
	$_SITE['ogpl_cmblang_text_es'] = "Español";
	$_SITE['ogpl_cmblang_text_fr'] = "Français";
	$_SITE['ogpl_cmblang_text_en'] = "English"; 
	$_SITE['ogpl_cmblang_title_es'] = "Español - Spanish version of the Web page"; 
	$_SITE['ogpl_cmblang_title_en'] = "Français - Version française de cette page"; 
	$_SITE['ogpl_cmblang_title_fr'] = "English - English version of the Web page"; 

	/* Support for other languages, only necessary for multilingual demos */
	$_SITE['ogpl_cmblang_text_es'] = "español";

	$_SITE['ogpl_terms_href_de'] = "#"; 
	$_SITE['ogpl_terms_text_de'] = "Begriffe und gewöhnt"; 

	$_SITE['ogpl_terms_href_es'] = "#"; 
	$_SITE['ogpl_terms_text_es'] = "Términos y condiciones"; 

	$_SITE['ogpl_terms_href_it'] = "#"; 
	$_SITE['ogpl_terms_text_it'] = "Termini e condiziona"; 

	$_SITE['ogpl_terms_href_pt'] = "#"; 
	$_SITE['ogpl_terms_text_pt'] = "Termos e condiciona"; 

	$_SITE['ogpl_terms_href_ru'] = "#"; 
	$_SITE['ogpl_terms_text_ru'] = "Сроки и условия"; 
		
	$_SITE['ogpl_langselect_en'] = "Language selection links"; 
	$_SITE['ogpl_langselect_fr'] = "Liens de sélection de langue"; 
	$_SITE['ogpl_hidebtarrow'] = "1"; 
?>