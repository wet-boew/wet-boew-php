<?php
	$_LANG_ = "fra";
	
	//modify this for you're specific site
	$_SITE['wb_site_title_'.$_LANG_] = "Variante pour PHP"; 
	$_SITE['wb_site_href_'.$_LANG_] = "home-accueil-fra.php"; 

	//$_MENU_LOCATION__ is set in the parent config.php file
	//modify to point to your sites mega menu
	$_SITE['wb_sitenav_file_'.$_LANG_] = $_MENU_LOCATION_ ."/prim-megamenu-fra.php";
	$_SITE['wb_sitenav_'.$_LANG_] = "Menu du site"; 

	//use the demo trail menus to create menus specific to your site.	
	$_SITE['wb_ft1_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-1-fra.php";
	$_SITE['wb_ft1_href_'.$_LANG_] = "#";
	$_SITE['wb_ft1_text_'.$_LANG_] = "À propos de nous";

	//moved contact us menu before news in reference to issue #2517
	$_SITE['wb_ft2_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-3-fra.php";
	$_SITE['wb_ft2_href_'.$_LANG_] = "#";
	$_SITE['wb_ft2_text_'.$_LANG_] = "Contactez-nous";

	$_SITE['wb_ft3_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-2-fra.php";
	$_SITE['wb_ft3_href_'.$_LANG_] = "#";
	$_SITE['wb_ft3_text_'.$_LANG_] = "Nouvelles";

	$_SITE['wb_ft4_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-4-fra.php";
	$_SITE['wb_ft4_href_'.$_LANG_] = "#";
	$_SITE['wb_ft4_text_'.$_LANG_] = "Restez branchés";
	
	//modify to point to your sites search option
	$_SITE['wb_search_'.$_LANG_] = "Recherche"; 
	$_SITE['wb_search_label_'.$_LANG_] = "Recherchez le site Web"; 
	
	$_SITE['wb_bcrumb_'.$_LANG_] = "Fil d'Ariane"; 
	
	//Modify to point to a custom signin/signout application
	//Override the 'wb_signin_file_'.$_LANG_ variable in the file calling it, the default is for demos
	$_SITE['wb_signin_file_'.$_LANG_] = "application-signout-fra.php";
	$_SITE['wb_signin_text_'.$_LANG_] = "Ouvrir une session";
	
	//Modify to point to a custom signin/signout application
	//Override the 'wb_signout_file_'.$_LANG_ variable in the file calling it, the default is for demos
	$_SITE['wb_signout_file_'.$_LANG_] = "application-signin-fra.php";
	$_SITE['wb_signout_text_'.$_LANG_] = "Fermer la session";

	//Modify to point to a custom account settings application when using sign in/sign out button
	$_SITE['wb_sio_file_'.$_LANG_] = "#";
	$_SITE['wb_sio_text_'.$_LANG_] = "Paramètres du compte";
	
	$_SITE['wb_sio_heading_'.$_LANG_] = "Mon compte";

	$_SITE['wb_meta_'.$_LANG_] = "fr"; 
	$_SITE['wb_lang_text_'.$_LANG_] = "Français"; 
	$_SITE['wb_sh_link_1_'.$_LANG_] = "Passer au contenu principal"; 
	$_SITE['wb_sh_link_2_'.$_LANG_] = "Passer au menu secondaire"; 
	$_SITE['wb_sh_link_3_'.$_LANG_] = "Passer au pied de page"; 
	$_SITE['wb_sec_'.$_LANG_] = "Menu secondaire"; 
	$_SITE['wb_sup_'.$_LANG_] = "Contenu supplémentaire"; 
	$_SITE['wb_doc_dates_'.$_LANG_] = "Date de modification&nbsp;:"; 
	$_SITE['wb_doc_version_'.$_LANG_] = "Version&nbsp;:"; 
	$_SITE['wb_foot_'.$_LANG_] = "Pied de page"; 
	$_SITE['wb_sitefooter_'.$_LANG_] = "Pied de page du site"; 
	
	$_SITE['archived_'.$_LANG_] = "<p><img src='".$_SITE['wb_core_dist_folder']."/js/images/archived/warning.gif' alt='Avertissement' title='Avertissement' class='margin-bottom-none' />La <a href='http://www.tbs-sct.gc.ca/pol/doc-fra.aspx?id=24227'>Norme sur la facilit&eacute; d'emploi des sites Web</a> remplace ce contenu. Cette page Web a &eacute;t&eacute; archiv&eacute;e parce que les Normes sur la normalisation des sites Internet 2.0 ont &eacute;t&eacute;s annul&eacute;es.</p><div id='archived' class='wet-boew-archived span-6' data-load='archived'><section><h2>Contenu archiv&eacute;</h2><p>L'information dont il est indiqu&eacute; qu'elle est archiv&eacute;e est fournie &agrave; des fins de r&eacute;f&eacute;rence, de recherche ou de tenue de documents. Elle n'est pas assujettie aux normes Web du gouvernement du Canada et elle n'a pas &eacute;t&eacute; modifi&eacute;e ou mise &agrave; jour depuis son archivage. Pour obtenir cette information dans un autre format, veuillez communiquer avec nous.</p></section></div><div class='clear'></div>";
?>
