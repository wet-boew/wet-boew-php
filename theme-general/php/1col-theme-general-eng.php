<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['title_eng'] = "1 column layout - General Theme - HTML5 - Web Experience Toolkit (WET)";
$_PAGE['issued'] = "2010-08-09";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['html5'] = "1"; ?>
<meta name="dcterms.description" content="English description / Description en anglais" />
<meta name="description" content="English description / Description en anglais" />
<meta name="keywords" content="English keywords / Mots-clés en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-general/inc/cont/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-general/inc/cont/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>
<div class="cn-toppage"><a href="#cn-tphp" title="Return to Top of Page">Top of Page</a></div>
<section><h2>Heading level&#160;2 (h2)</h2>

	<div class="cn-toppage"><a href="#cn-tphp" title="Return to Top of Page">Top of Page</a></div>
	<section><h3>Heading level&#160;3 (h3)</h3>

		<div class="cn-toppage"><a href="#cn-tphp" title="Return to Top of Page">Top of Page</a></div>
		<section><h4>Heading level&#160;4 (h4)</h4>

			<div class="cn-toppage"><a href="#cn-tphp" title="Return to Top of Page">Top of Page</a></div>
			<section><h5>Heading level&#160;5 (h5)</h5>

				<div class="cn-toppage"><a href="#cn-tphp" title="Return to Top of Page">Top of Page</a></div>
				<section><h6>Heading level&#160;6 (h6)</h6>

					<p>CONTENT (a mix of text and images or graphics is expected)</p>			
				</section>
			</section>
		</section>
	</section>
</section>
<hr />
<dl id="cn-doc-dates" role="contentinfo">
<dt>Date Modified:</dt><dd><span><time pubdate="pubdate"><?php echo $_PAGE['modified']; ?></time></span></dd>
</dl>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-general/inc/cont/trail-arr.php"; ?>
</body>
</html>