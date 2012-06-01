<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";
$_PAGE['title_eng'] = "Message title - Server message page (eng-fra) - CLF 2.0 Theme - HTML5 - Web Experience Toolkit (WET)";
$_PAGE['title_fra'] = "Titre du message - Page de message du serveur (eng-fra) - Thème NSI 2.0 - HTML5 - Boîte à outils de l'expérience Web (BOEW)";
$_PAGE['issued'] = "2010-08-09";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['html5'] = "1"; ?>
<meta name="robots" content="none" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/servpage/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/servpage/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>

<div id="cn-left-msg"><section><h2>Message title (h2)</h2>
<p>Message message message message message message message message message message message message message message message message message message message message.</p>
</section></div>

<div id="cn-right-msg" lang="fr"><section><h2>Titre du message (h2)</h2>
<p>Message message message message message message message message message message message message message message message message message message message message.</p>
</section></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/servpage/trail-arr.php"; ?>
</body>
</html>