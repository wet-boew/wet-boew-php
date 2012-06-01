<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['title_eng'] = "Home page - Mega menu - GC Intranet theme - HTML5 - Web Experience Toolkit (WET)";
$_PAGE['issued'] = "2011-10-31";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['html5'] = "1";
$_PAGE['bcrumb_hide'] = "1"; ?>
<meta name="dcterms.description" content="English description / Description en anglais" />
<meta name="description" content="English description / Description en anglais" />
<meta name="keywords" content="English keywords / Mots-clés en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" title="scheme" content="English subject terms / Termes de sujet en anglais" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/cont/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/cont/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>
<div id="cn-content">
<div id="cn-headlines" class="span-3"><section><h2>Headlines</h2>
<ul class="zebra">
<li><section><h3><a href="#">Headline 1</a></h3>
<p>Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. <a href="#">Read&#160;more<span class="cn-invisible"> - Headline 1</span></a></p>
</section></li>
<li><section><h3><a href="#">Headline 2</a></h3>
<p>Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. <a href="#">Read&#160;more<span class="cn-invisible"> - Headline 2</span></a></p>
</section></li>
<li><section><h3><a href="#">Headline 3</a></h3>
<p>Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. Sample text. <a href="#">Read&#160;more<span class="cn-invisible"> - Headline 3</span></a></p>
</section></li>
</ul>
</section></div>

<div id="cn-video" class="span-3"><section><h2>Videos</h2>
<div id="cn-background-dark">
<img class="posterimg" src="/theme-gcwu-fegc/images/video.jpg" alt="Sample video player" title="Sample video player" />
<p><strong>Video title</strong></p>
<p>Short description of the current video.</p>
</div>
<ul>
<li><a href="#">Multimedia Help</a></li>
<li><a href="#">Transcripts and Alternative Formats</a></li>
</ul>
</section></div>

<div id="cn-connect" class="span-6"><section><h2>Stay connected</h2>
<ul>
<li><a href="#"><img class="image-actual" src="/theme-gcwu-fegc/images/sl_twitter.png" alt="Twitter" title="Twitter" /></a></li>
<li><a href="#"><img class="image-actual" src="/theme-gcwu-fegc/images/sl_youtube.png" alt="YouTube" title="YouTube" /></a></li>
<li><a href="#"><img class="image-actual" src="/theme-gcwu-fegc/images/sl_feeds.png" alt="Feeds" title="Feeds" /></a></li>
</ul>
</section></div></div>

<aside role="complementary"><div id="cn-aside"><h2>Supplemental content</h2>
<section><div id="cn-gc-priorities"><h3>Priorities</h3><div id="cn-gc-priorities-inner">
<ul>
<li><img src="/theme-gcwu-fegc/images/prio1-eng.png" width="220" height="70" alt="Priority 1" title="Priority 1" /></li>
<li><img src="/theme-gcwu-fegc/images/prio2-eng.png" width="220" height="70" alt="Priority 2" title="Priority 2" /></li>
<li><img src="/theme-gcwu-fegc/images/prio3-eng.png" width="220" height="70" alt="Priority 3" title="Priority 3" /></li>
</ul>
</div></div></section>

<section><div class="cn-minister"><h3>Meet the Minister</h3><div class="cn-minister-inner">
<div class="cn-minister-image"><img src="/theme-gcwu-fegc/images/minister.JPG" width="99" height="149" alt="The Honourable minister name" /></div>
<div class="cn-minister-info">
<p>The Honourable<br /><strong>minister name</strong></p>
<ul>
<li><a href="#">About the minister</a></li>
<li><a href="#">His portfolio</a></li>
</ul>
</div>
</div></div></section>
</div></aside>
<div class="clear"></div>
<!-- Supplemental content ends / Fin du contenu supplémentaire -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gc-intranet/inc/cont/trail-arr.php"; ?>
</body>
</html>