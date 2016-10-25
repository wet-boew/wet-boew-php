<?php
	/* THIS FILE REQUIRES TRANSLATION */
	$_LANG_ = "pt";
	$_SITE['wb_meta_'.$_LANG_] = "pt";
	$_SITE['wb_lang_text_'.$_LANG_] = "Português";
	$_SITE['wb_lang_cur_'.$_LANG_] = "(current)";

	$_SITE['theme_list_'.$_LANG_] = array(
		"theme-gcwu-fegc" => "Government of Canada Web Usability theme",
		"theme-gcweb" => "Canada.ca theme",
		"theme-wet-boew" => "WET theme",
		"theme-gc-intranet" => "Government of Canada Web Usability Intranet theme",
		"theme-ogpl" => "OGPL theme",
		"theme-base" => "Base theme",
	);

	$_SITE['wb_sh_link_1_'.$_LANG_] = "Skip to main content";
	$_SITE['wb_sh_link_2_'.$_LANG_] = "Skip to secondary menu";
	$_SITE['wb_sh_link_3_'.$_LANG_] = "Skip to site information";

	$_SITE['wb_site_title_'.$_LANG_] = "PHP Variant";
	$_SITE['wb_site_href_'.$_LANG_] = "home-accueil-en.php";

	$_SITE['wb_lang_header_'.$_LANG_] = "Language selection";

	$_SITE['wb_terms_'.$_LANG_] = "Terms and conditions of use";
	$_SITE['wb_terms_href_'.$_LANG_] = "../../license-en.php";

	$_SITE['wb_mb_menu_'.$_LANG_] = "Search and menus";

	// Used in foot-nav.php.
	$_SITE['wb_sec_'.$_LANG_] = "Secondary menu";

	// Used in cont/foot.php.
	$_SITE['wb_foot_'.$_LANG_] = "About this site";

	// $_MENU_LOCATION__ is set in the parent config.php file.
	$_SITE['wb_sitenav_file_'.$_LANG_] = $_MENU_LOCATION_ ."/prim-megamenu-en.php";
	$_SITE['wb_sitenav_'.$_LANG_] = "Site menu";

	$_SITE['wb_ft1_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-1-en.php";
	$_SITE['wb_ft1_href_'.$_LANG_] = "#";
	$_SITE['wb_ft1_text_'.$_LANG_] = "Contact us";

	$_SITE['wb_ft2_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-2-en.php";
	$_SITE['wb_ft2_href_'.$_LANG_] = "#";
	$_SITE['wb_ft2_text_'.$_LANG_] = "About";

	$_SITE['wb_ft3_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-3-en.php";
	$_SITE['wb_ft3_href_'.$_LANG_] = "#";
	$_SITE['wb_ft3_text_'.$_LANG_] = "News";

	$_SITE['wb_ft4_menu_file_'.$_LANG_] = $_MENU_LOCATION_ ."/trail-4-en.php";
	$_SITE['wb_ft4_href_'.$_LANG_] = "#";
	$_SITE['wb_ft4_text_'.$_LANG_] = "Stay connected";

	$_SITE['wb_search_'.$_LANG_] = "Search";
	$_SITE['wb_search_label_'.$_LANG_] = "Search Website";

	$_SITE['wb_bcrumb_'.$_LANG_] = "Breadcrumb trail";

	$_SITE['wb_doc_dates_'.$_LANG_] = "Date modified:"; // Visible if $_SITE['isapp'] == 0.
	$_SITE['wb_doc_version_'.$_LANG_] = "Version:";     // Visible if $_SITE['isapp'] == 1.

	// Visible if $_PAGE['isarchived'] == 1.
	$_SITE['wb_archive_title_'.$_LANG_] = "ARCHIVED - ";
	$_SITE['wb_archive_panel_title_'.$_LANG_] = "Archived Content";
	$_SITE['wb_archive_panel_glyph_'.$_LANG_] = "Warning";
	$_SITE['wb_archive_warn_msg_'.$_LANG_] = "Information identified as archived is provided for reference, research or recordkeeping purposes. It is not subject to the Government of Canada Web Standards and has not been altered or updated since it was archived. Please contact us to request a format other than those available.";

	$_STIE['wb_err_return_text_'.$_LANG_] = "Return to the ";
	$_STIE['wb_err_return_link_'.$_LANG_] = "home page";

	// Modify to point to a custom button bar.
	$_SITE['wb_buttonbar_file_'.$_LANG_] = "../inc/button-bar.php";

	// Modify to point to a custom signin application.
	// Override the 'wb_signin_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['signin'] == 1.
	$_SITE['wb_signin_href_'.$_LANG_] = "#";
	$_SITE['wb_signininfo_text_'.$_LANG_] = "Sign-on information";
	$_SITE['wb_signin_text_'.$_LANG_] = "Sign in";

	// Modify to point to a custom registration application.
	// Override the 'wb_register_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['register'] == 1 and $_PAGE['signin'] == 1.
	$_SITE['wb_register_href_'.$_LANG_] = "#";
	$_SITE['wb_register_text_'.$_LANG_] = "Register";

	// Modify to point to a custom signout application.
	// Override the 'wb_signout_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['signout'] == 1.
	$_SITE['wb_signout_href_'.$_LANG_] = "#";
	$_SITE['wb_signout_text_'.$_LANG_] = "Sign out";
	$_SITE['wb_signedinas_text_'.$_LANG_] = "Signed in as";
	$_SITE['wb_username_text'] = "";

	// Modify to point to a custom account settings application.
	// Override the 'wb_settings_file_'.$_LANG_ variable in the file calling it, the default is for demos.
	// Visible if $_PAGE['settings'] == 1 and $_PAGE['signout'] == 1.
	$_SITE['wb_settings_href_'.$_LANG_] = "#";
	$_SITE['wb_settings_text_'.$_LANG_] = "Account settings";
	$_SITE['wb_settings_heading_'.$_LANG_] = "My account";