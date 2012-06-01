<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2a.php"; ?>
<div id="cn-in-pd">
<ul>
<li id="cn-inotices-link-left">
<dl class="cn-doc-dates"<?php if ($_PAGE['html5'] == '1') { ?> role="contentinfo"<?php } ?>>
<dt><?php echo $_TEMPLATE['doc_dates_' . $_PAGE['lang1']]; ?></dt><dd><span><?php if ($_PAGE['html5'] == '1') { ?><time><?php } echo $_PAGE['modified']; if ($_PAGE['html5'] == '1') { ?></time><?php } ?></span></dd>
</dl>
<a href="<?php echo $_TEMPLATE['inotices_link_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_TEMPLATE['inotices_link_text_' . $_PAGE['lang1']]; ?></a><br />
</li>
<li id="cn-inotices-link-right" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>>
<dl class="cn-doc-dates"<?php if ($_PAGE['html5'] == '1') { ?> role="contentinfo"<?php } ?>>
<dt><?php echo $_TEMPLATE['doc_dates_' . $_PAGE['lang2']]; ?></dt><dd><span><?php if ($_PAGE['html5'] == '1') { ?><time><?php } echo $_PAGE['modified']; if ($_PAGE['html5'] == '1') { ?></time><?php } ?></span></dd>
</dl>
<a href="<?php echo $_TEMPLATE['inotices_link_href_' . $_PAGE['lang2']]; ?>" rel="license"><?php echo $_TEMPLATE['inotices_link_text_' . $_PAGE['lang2']]; ?></a>
</li>
</ul>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2b.php"; ?>