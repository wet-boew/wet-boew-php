<?php
	$_LANG_ = "fr";
	$_SITE['wb_meta_'.$_LANG_] = "fr";
	$_SITE['wb_lang_text_'.$_LANG_] = "Français";
	$_SITE['wb_lang_cur_'.$_LANG_] = "(courant)";

	$_SITE['theme_list_'.$_LANG_] = array(
		"theme-gcwu-fegc" => "Thème de la facilité d’emploi Web du gouvernement du Canada",
		"theme-gcweb" => "Thème Canada.ca",
		"theme-wet-boew" => "Thème de la BOEW",
		"theme-gc-intranet" => "Thème intranet de la facilité d’emploi Web du gouvernement du Canada",
		"theme-ogpl" => "Thème PGO",
		"theme-base" => "Thème de base",
	);

	$_SITE['wb_sh_link_1_'.$_LANG_] = "Passer au contenu principal";
	$_SITE['wb_sh_link_2_'.$_LANG_] = "Passer au menu secondaire";
	$_SITE['wb_sh_link_3_'.$_LANG_] = "Passer aux informations sur le site";

	$_SITE['wb_site_title_'.$_LANG_] = "Variante pour PHP";
	$_SITE['wb_site_href_'.$_LANG_] = "home-accueil-fr.php";

	$_SITE['wb_lang_header_'.$_LANG_] = "Sélection de la langue";

	$_SITE['wb_terms_'.$_LANG_] = "Conditions régissant l'utilisation";
	$_SITE['wb_terms_href_'.$_LANG_] = "../../licence-fr.php";

	$_SITE['wb_mb_menu_'.$_LANG_] = "Recherche et menus";

	// Used in foot-nav.php.
	$_SITE['wb_sec_'.$_LANG_] = "Menu secondaire";

	// Used in cont/foot.php.
	$_SITE['wb_foot_'.$_LANG_] = "À propos de ce site";

	// $_MENU_LOCATION__ is set in the parent config.php file.
	$_SITE['wb_sitenav_file_'.$_LANG_] = $_MENU_LOCATION_ ."/prim-megamenu-fr.php";
	$_SITE['wb_sitenav_'.$_LANG_] = "Menu du site";

	$_SITE['wb_ft1_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-1-fr.php";
	$_SITE['wb_ft1_href_'.$_LANG_] = "#";
	$_SITE['wb_ft1_text_'.$_LANG_] = "Contactez-nous";

	$_SITE['wb_ft2_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-2-fr.php";
	$_SITE['wb_ft2_href_'.$_LANG_] = "#";
	$_SITE['wb_ft2_text_'.$_LANG_] = "À propos";

	$_SITE['wb_ft3_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-3-fr.php";
	$_SITE['wb_ft3_href_'.$_LANG_] = "#";
	$_SITE['wb_ft3_text_'.$_LANG_] = "Nouvelles";

	$_SITE['wb_ft4_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-4-fr.php";
	$_SITE['wb_ft4_href_'.$_LANG_] = "#";
	$_SITE['wb_ft4_text_'.$_LANG_] = "Restez branchés";

	$_SITE['wb_search_'.$_LANG_] = "Recherche";
	$_SITE['wb_search_label_'.$_LANG_] = "Recherchez le site Web";

	$_SITE['wb_bcrumb_'.$_LANG_] = "Fil d'Ariane";

	$_SITE['wb_doc_dates_'.$_LANG_] = "Date de modification&nbsp;:"; // Visible if $_SITE['isapp'] == 0.
	$_SITE['wb_doc_version_'.$_LANG_] = "Version&nbsp;:";            // Visible if $_SITE['isapp'] == 1.

	// Visible if $_PAGE['isarchived'] == 1.
	$_SITE['wb_archive_title_'.$_LANG_] = "ARCHIV&Eacute;E - ";
	$_SITE['wb_archive_panel_title_'.$_LANG_] = "Contenu archivé";
	$_SITE['wb_archive_panel_glyph_'.$_LANG_] = "Avertissement";
	$_SITE['wb_archive_warn_msg_'.$_LANG_] = "L'information dont il est indiqué qu'elle est archivée est fournie à des fins de référence, de recherche ou de tenue de documents. Elle n'est pas assujettie aux normes Web du gouvernement du Canada et elle n'a pas été modifiée ou mise à jour depuis son archivage. Pour obtenir cette information dans un autre format, veuillez communiquer avec nous.";

	$_STIE['wb_err_return_text_'.$_LANG_] = "Retournez à la ";
	$_STIE['wb_err_return_link_'.$_LANG_] = "page d'accueil";

	// Modify to point to a custom button bar.
	$_SITE['wb_buttonbar_file_'.$_LANG_] = "../inc/button-bar.php";

	// Modify to point to a custom signin application.
	// Override the 'wb_signin_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['signin'] == 1.
	$_SITE['wb_signin_href_'.$_LANG_] = "#";
	$_SITE['wb_signininfo_text_'.$_LANG_] = "Information de l'utilisateur actuel";
	$_SITE['wb_signin_text_'.$_LANG_] = "Ouvrir une session";

	// Modify to point to a custom registration application.
	// Override the 'wb_register_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['register'] == 1 and $_PAGE['signin'] == 1.
	$_SITE['wb_register_href_'.$_LANG_] = "#";
	$_SITE['wb_register_text_'.$_LANG_] = "Inscription";

	// Modify to point to a custom signout application.
	// Override the 'wb_signout_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['signout'] == 1.
	$_SITE['wb_signout_href_'.$_LANG_] = "#";
	$_SITE['wb_signout_text_'.$_LANG_] = "Fermer la session";
	$_SITE['wb_signedinas_text_'.$_LANG_] = "Connecté en tant que";
	$_SITE['wb_username_text'] = "";

	// Modify to point to a custom account settings application.
	// Override the 'wb_settings_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['settings'] == 1 and $_PAGE['signout'] == 1.
	$_SITE['wb_settings_url_'.$_LANG_] = "#";
	$_SITE['wb_settings_text_'.$_LANG_] = "Paramètres du compte";
	$_SITE['wb_settings_heading_'.$_LANG_] = "Mon compte";