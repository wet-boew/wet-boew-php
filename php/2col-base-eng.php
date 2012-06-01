<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['title_eng'] = "2 column layout - Base - Web Experience Toolkit (WET)";
$_PAGE['issued'] = "2010-08-09";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['html5'] = "1"; ?>
<meta name="dcterms.description" content="English description / Description en anglais" />
<meta name="description" content="English description / Description en anglais" />
<meta name="keywords" content="English keywords / Mots-clés en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-base/inc/cont/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/2col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-base/inc/cont/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>

<p>Normally contains the main content of the page.</p>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/left-gauche-1.php";
include $_SERVER['DOCUMENT_ROOT'] . "/php/menu-left-gauche/exmple-eng.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/left-gauche-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-base/inc/cont/trail-arr.php"; ?>
</body>
</html>