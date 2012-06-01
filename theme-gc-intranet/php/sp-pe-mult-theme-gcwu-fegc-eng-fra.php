<?php if ($_NAVPATH['show'] != 1) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php }
$_NAVPATH['lang1'] = "eng";
$_NAVPATH['lang2'] = "fra";
$_NAVPATH['lang3'] = "deu";
$_NAVPATH['lang4'] = "spa";
$_NAVPATH['lang5'] = "ita";
$_NAVPATH['lang6'] = "por";
$_NAVPATH['lang7'] = "rus";
$_NAVPATH['title_eng'] = "Welcome";
$_NAVPATH['title_fra'] = "Bienvenue";
$_NAVPATH['link_eng'] = "/theme-gc-intranet/php/2col-megamenu-theme-gc-intranet-eng.php";
$_NAVPATH['link_fra'] = "/theme-gc-intranet/php/2col-megamenu-theme-gc-intranet-fra.php";
$_NAVPATH['link_deu'] = "#";
$_NAVPATH['link_spa'] = "#";
$_NAVPATH['link_ita'] = "#";
$_NAVPATH['link_por'] = "#";
$_NAVPATH['link_rus'] = "#";
$_NAVPATH['issued'] = "2011-10-31";
$_NAVPATH['modified'] = "YYYY-MM-DD";
$_NAVPATH['html5'] = "1";
if ($_NAVPATH['show'] != 1) {
include $_SERVER['DOCUMENT_ROOT'] . "/inc/sp-pe-vars.php"; ?>
<meta name="dcterms.description" lang="en" content="English description / Description en anglais" />
<meta name="dcterms.description" lang="fr" content="French description / Description en français" />
<meta name="description" lang="en" content="English description / Description en anglais" />
<meta name="description" lang="fr" content="French description / Description en français" />
<meta name="keywords" lang="en" content="English keywords / Mots-clés en anglais" />
<meta name="keywords" lang="fr" content="French keywords / Mots-clés en français" />
<meta name="dcterms.creator" lang="en" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.creator" lang="fr" content="French name of the content author / Nom en français de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" lang="en" content="English subject terms / Termes de sujet en anglais" />
<meta name="dcterms.subject" title="scheme" lang="fr" content="French subject terms / Termes de sujet en français" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/sp-pe/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/sp-pe/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/sp-pe/cont.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/sp-pe/trail-arr.php"; ?>
</body>
</html>
<?php } else {
include $_SERVER['DOCUMENT_ROOT'] . "/inc/np.php";
} ?>