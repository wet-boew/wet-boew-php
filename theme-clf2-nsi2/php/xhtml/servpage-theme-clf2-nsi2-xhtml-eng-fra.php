<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['lang2'] = "fra";
$_PAGE['title_eng'] = "Message title - Server message page (eng-fra) - CLF 2.0 Theme - XHTML 1.0 Strict - Web Experience Toolkit (WET)";
$_PAGE['title_fra'] = "Titre du message - Page de message du serveur (eng-fra) - Thème NSI 2.0 - XHTML 1.0 Strict - Boîte à outils de l'expérience Web (BOEW)";
$_PAGE['issued'] = "2010-08-09";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['html5'] = "0"; ?>
<meta name="robots" content="none" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/servpage/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/servpage/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>

<div id="cn-left-msg"><h2>Message title (h2)</h2>
<p>Message message message message message message message message message message message message message message message message message message message message.</p>
</div>

<div id="cn-right-msg" lang="fr" xml:lang="fr"><h2>Titre du message (h2)</h2>
<p>Message message message message message message message message message message message message message message message message message message message message.</p>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-clf2-nsi2/inc/servpage/trail-arr.php"; ?>
</body>
</html>