<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2a.php"; ?>
<div id="cn-cmb"><?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><h3><?php echo $_TEMPLATE['cmb_' . $_PAGE['lang1']]; ?></h3>
<ul>
<li id="cn-cmb1"><a href="<?php echo $_TEMPLATE['cmb1_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb1_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb1_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb2"><a href="<?php echo $_TEMPLATE['cmb2_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb2_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb2_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb3"><a href="<?php echo $_TEMPLATE['cmb3_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb3_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb3_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb4"><a rel="external" href="<?php echo $_TEMPLATE['cmb4_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb4_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb4_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
<?php if ($_PAGE['html5'] == '1') { ?></nav><?php } ?></div>

<div id="cn-in-pd"><h3><?php echo $_TEMPLATE['pd_' . $_PAGE['lang1']]; ?></h3>
<div id="cn-sig"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/images/sig-<?php echo $_PAGE['lang1']; ?>.gif" width="372" height="20" alt="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?>" /></div>
<div id="cn-toppage-foot"><a href="#cn-tphp" title="<?php echo $_TEMPLATE['toppage_foot_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['toppage_foot_text_' . $_PAGE['lang1']]; ?></a></div>
<div id="cn-in-pd-links">
<ul>
<li id="cn-inotices-link"><a href="<?php echo $_TEMPLATE['inotices_link_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_TEMPLATE['inotices_link_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div>
</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2b.php"; ?>