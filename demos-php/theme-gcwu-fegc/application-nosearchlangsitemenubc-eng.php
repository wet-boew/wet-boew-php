<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
wet-boew.github.io/wet-boew/License-eng.txt / wet-boew.github.io/wet-boew/Licence-fra.txt -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['title_eng'] = "Application template - No search, language selection link, site menu or breadcrumb trail - GC Web Usability theme - PHP variant - Working examples - Web Experience Toolkit&#160;(WET)";
$_PAGE['issued'] = "2013-04-18";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['version'] = "1.1b";
$_PAGE['html5'] = "1";
$_PAGE['isapp'] = "1";
$_PAGE['nosearch'] = "1";
$_PAGE['nolang'] = "1";
$_PAGE['nositemenu'] = "1";
$_PAGE['bcrumb_hide'] = "1"; ?>
<meta name="dcterms.description" content="English description / Description en anglais" />
<meta name="description" content="English description / Description en anglais" />
<meta name="keywords" content="English keywords / Mots-clés en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" /> 

<?php include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/theme-gcwu-fegc/inc/cont/css.php"; ?>
<!-- CustomCSSStart -->

<!-- CustomCSSEnd -->
</head>

<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/theme-gcwu-fegc/inc/cont/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/centre-1.php"; ?>
<h2>Overview</h2>	
<p>This feature adapts the HTML5 core markup structure for use with PHP (PHP).</p>
<h3>Benefits</h3>


<ul>
  <li>Helps to minimize the duplication of content and code (such as titles and   dates)</li>
  <li>Provides central control of the left and right columns</li>
  <li>Improves consistency by separating content from the template code</li>   
  <li>Automates the breadcrumb trail</li>
  <li>Conforms to WCAG 2.0 AA</li>
  <li>Uses WAI-ARIA to enhance accePHPbility</li>
  <li>Supports Firefox, Opera, Safari, Chrome, and IE 7+ </li>
</ul>

<h3>Minimum Requirements</h3>
<ul>
  <li><a href="https://github.com/wet-boew/wet-boew/downloads">WET 3.0 framework</a></li>
  <li>PHP installed on a web server</li>
</ul>
<h3>How to install the files</h3>

<p>Make sure that you have the WET 3.0 build folder in your root directory.</p>
<p>Copy the following directories into a folder created in the root.  In the PHP example available, this folder is called "PHP-demos". This demos folder should have the following folders:</p>
<ul>
  <li>inc\</li>
  <li>theme-gcwu-fegc\</li>
  </ul>
<p>"inc" is a folder with your global include files that are unrelated to a specific theme. </p>
<p>Another &quot;inc&quot; folder for theme-specific includes is under the theme-gcwu-fegc folder, as well as a folder for main &quot;menu&quot; based includes. Final, the folder with your php pages is located here.</p>
<ul>
  <li>theme-gcwu-fegc\inc</li>
  <li>theme-gcwu-fegc\menu</li>
  <li>theme-gcwu-fegc\php</li>
</ul>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/theme-gcwu-fegc/inc/cont/trail-arr.php"; ?>
<!-- CustomScriptsStart -->

<!-- CustomScriptsEnd -->
</body>
</html>