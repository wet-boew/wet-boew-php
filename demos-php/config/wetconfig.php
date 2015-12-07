<?php
// This settings file must be edited and copied either one level up from wet-boew-php
// or in thewebroot of your webserver. See DEVNOTES.txt for more information.

// --------------------------------------------------------------------------
// Choose a theme. Uncomment the one you want.
// --------------------------------------------------------------------------

// $_SITE['wb_theme'] = "theme-base";        // WET Base theme
// $_SITE['wb_theme'] = 'theme-gc-intranet'; // Government of Canada Web Usability Intranet theme.
// $_SITE['wb_theme'] = 'theme-gcweb';       // Canada.ca theme.
// $_SITE['wb_theme'] = 'theme-gcwu-fegc';   // Government of Canada Web Usability theme.
// $_SITE['wb_theme'] = 'theme-ogpl';        // OGPL theme.
// $_SITE['wb_theme'] = 'theme-wet-boew';    // WET-BOEW theme.
if (!isset($_SITE['wb_theme'])) $_SITE['wb_theme'] = 'theme-base'; // Default is Base WET theme

if (isset($_GET['theme'])) {
    setcookie('theme', $_GET['theme'], 0, '/');
    $_SITE['wb_theme'] = 'theme-' . $_GET['theme'];
} else if (isset($_COOKIE['theme'])) {
    $_SITE['wb_theme'] = 'theme-' . $_COOKIE['theme'];
}

// All WET-BOEW files will go under this directory.
$_SITE['wb_www_root'] = "/wetsite2"; // Make blank if in the root of your site (no leading slash!).
// Location of the WET-BOEW-PHP files.
$_SITE['wb_php_root'] = $_SITE['wb_www_root'] . "/wet-boew-php";
// Location of the WET-BOEW-THEMES core files.
$_SITE['wb_core_root'] =  $_SITE['wb_www_root'] . "/wet-boew-themes/" . $_SITE['wb_theme'];
// Location of the root of your website (not necessarily the webroot).
$_SITE['wb_website_root'] = $_SITE['wb_www_root'] . "/wet-boew-php/demos-php";

// Include the standard distribution config with the default settings.
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_root'] . "/dist-php/config/config.php";

// --------------------------------------------------------------------------
// Override wet-boew-php/dist-php/config/config.php settings for the specific site.
// --------------------------------------------------------------------------

// Modify to point to your sites search implementation.
$_SITE['wb_search_file'] = $_SITE['wb_php_dist_folder'] ."/search/search.php";

// Link to Home page.
$_SITE['wb_site_href_en'] = $_SITE['wb_website_root'] . "/index-en.php";
$_SITE['wb_site_href_fr'] = $_SITE['wb_website_root'] . "/index-fr.php";

// Terms and Conditions Link.
$_SITE['wb_terms_href_en'] = $_SITE['wb_website_root'] . "/license-en.php";
$_SITE['wb_terms_href_fr'] = $_SITE['wb_website_root'] . "/licence-fr.php";

// Location of the language selection link. Point to whatever script suits your site.
$_SITE['wb_cmblang_href_en'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php";
$_SITE['wb_cmblang_href_fr'] = $_SITE['wb_php_dist_folder'] . "/langselect/lang.php";