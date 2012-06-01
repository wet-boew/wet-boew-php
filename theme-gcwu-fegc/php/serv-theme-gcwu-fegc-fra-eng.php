<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "fra";
$_PAGE['lang2'] = "eng";
$_PAGE['title_fra'] = "Titre du message (h1)";
$_PAGE['title_eng'] = "Message title (h1)";
$_PAGE['issued'] = "2011-10-31";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['html5'] = "1"; ?>
<meta name="robots" content="none" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/servpage/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/servpage/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>

<div class="span-4"><section><h2>Titre du message (h2)</h2>
<p>Message message message message message message message message message message message message message message message message message message message message.</p>
<ul>
<li><a href="home-accueil-megamenu-theme-gcwu-fegc-fra.html">Accueil</a></li>
<li><a href="#">Contactez-nous</a></li>
</ul>
</section></div>
<div class="span-4" lang="en"><section><h2>Message title (h2)</h2>
<p>Message message message message message message message message message message message message message message message message message message message message.</p>
<ul>
<li><a href="home-accueil-megamenu-theme-gcwu-fegc-eng.html">Home</a></li>
<li><a href="#">Contact us</a></li>
</ul>
</section></div>
<div  id="cn-decoration-bar" class="span-8"></div>
<div class="clear"></div>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/servpage/trail-arr.php"; ?>
</body>
</html>