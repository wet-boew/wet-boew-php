<?php if ($_NAVPATH['show'] != 1) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php }
$_NAVPATH['lang1'] = "fra";
$_NAVPATH['lang2'] = "eng";
$_NAVPATH['title_eng'] = "XHTML 1.0 Strict";
$_NAVPATH['title_fra'] = "XHTML 1.0 Strict";
$_NAVPATH['link_eng'] = "/theme-gcwu-fegc/php/xhtml/2col-megamenu-theme-gcwu-fegc-xhtml-eng.php";
$_NAVPATH['link_fra'] = "/theme-gcwu-fegc/php/xhtml/2col-megamenu-theme-gcwu-fegc-xhtml-fra.php";
$_NAVPATH['issued'] = "2011-10-31";
$_NAVPATH['modified'] = "YYYY-MM-DD";
$_NAVPATH['html5'] = "0";
if ($_NAVPATH['show'] != 1) {
include $_SERVER['DOCUMENT_ROOT'] . "/inc/sp-pe-vars.php"; ?>
<meta name="dcterms.description" lang="en" xml:lang="en" content="English description / Description en anglais" />
<meta name="dcterms.description" content="French description / Description en français" />
<meta name="description" lang="en" xml:lang="en" content="English description / Description en anglais" />
<meta name="description" content="French description / Description en français" />
<meta name="keywords" lang="en" xml:lang="en" content="English keywords / Mots-clés en anglais" />
<meta name="keywords" content="French keywords / Mots-clés en français" />
<meta name="dcterms.creator" lang="en" xml:lang="en" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" content="French name of the content author / Nom en français de l'auteur du contenu" />
<meta name="dcterms.subject" scheme="scheme" lang="en" xml:lang="en" content="English subject terms / Termes de sujet en anglais" />
<meta name="dcterms.subject" scheme="scheme" content="French subject terms / Termes de sujet en français" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/cont.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/sp-pe/trail-arr.php"; ?>
</body>
</html>
<?php } else {
include $_SERVER['DOCUMENT_ROOT'] . "/inc/np.php";
} ?>