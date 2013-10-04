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
	$_SITE['ogpl_cmblang_href_eng'] = $_SITE['ogpl_cmblang_href_fra'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php"; 

	//sets the name of the logo  image and alt text used in the top left of the theme
	$_SITE['ogpl_sig_image'] = "theme103_logo"; 
	$_SITE['ogpl_sig_eng'] = "Open Government Platform"; 
	$_SITE['ogpl_sig_fra'] = "Plate-forme de gouvernement ouvert"; 

	//hidden text used for accessibility
	$_SITE['ogpl_gcnavbar_eng'] = "Navigation bar"; 
	$_SITE['ogpl_gcnavbar_fra'] = "Barre de navigation"; 
	$_SITE['ogpl_gcfooter_eng'] = "Footer"; 
	$_SITE['ogpl_gcfooter_fra'] = "Pied de page"; 
	
	//button and language swap text
	$_SITE['ogpl_cmblang_text_spa'] = "Español";
	$_SITE['ogpl_cmblang_text_fra'] = "Français";
	$_SITE['ogpl_cmblang_text_eng'] = "English"; 
	$_SITE['ogpl_cmblang_title_spa'] = "Español - Spanish version of the Web page"; 
	$_SITE['ogpl_cmblang_title_eng'] = "Français - Version française de cette page"; 
	$_SITE['ogpl_cmblang_title_fra'] = "English - English version of the Web page"; 

	/* Support for other languages, only necessary for multilingual demos */
	$_SITE['ogpl_cmblang_text_spa'] = "español";

	$_SITE['ogpl_terms_href_deu'] = "#"; 
	$_SITE['ogpl_terms_text_deu'] = "Begriffe und gewöhnt"; 

	$_SITE['ogpl_terms_href_spa'] = "#"; 
	$_SITE['ogpl_terms_text_spa'] = "Términos y condiciones"; 

	$_SITE['ogpl_terms_href_ita'] = "#"; 
	$_SITE['ogpl_terms_text_ita'] = "Termini e condiziona"; 

	$_SITE['ogpl_terms_href_por'] = "#"; 
	$_SITE['ogpl_terms_text_por'] = "Termos e condiciona"; 

	$_SITE['ogpl_terms_href_rus'] = "#"; 
	$_SITE['ogpl_terms_text_rus'] = "Сроки и условия"; 
		
	$_SITE['ogpl_langselect_eng'] = "Language selection links"; 
	$_SITE['ogpl_langselect_fra'] = "Liens de sélection de langue"; 
	$_SITE['ogpl_hidebtarrow'] = "1"; 
?>