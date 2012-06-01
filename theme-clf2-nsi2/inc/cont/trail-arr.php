<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2a.php"; ?>
<div id="cn-in-pd">
<dl id="cn-doc-dates"<?php if ($_PAGE['html5'] == '1') { ?> role="contentinfo"<?php } ?>>
<dt><?php echo $_TEMPLATE['doc_dates_' . $_PAGE['lang1']]; ?></dt><dd><span><?php if ($_PAGE['html5'] == '1') { ?><time><?php } echo $_PAGE['modified']; if ($_PAGE['html5'] == '1') { ?></time><?php } ?></span></dd>
</dl>
<div id="cn-toppage-foot"><a href="#cn-tphp" title="<?php echo $_TEMPLATE['toppage_foot_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['toppage_foot_text_' . $_PAGE['lang1']]; ?></a></div>
<div id="cn-in-pd-links">
<ul>
<li id="cn-inotices-link"><a href="<?php echo $_TEMPLATE['inotices_link_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_TEMPLATE['inotices_link_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2b.php"; ?>