<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1a.php"; ?>
<ul id="cn-lang-links">
<li><a href="<?php echo $_TEMPLATE['cmblang_href_' . $_PAGE['lang1']]; ?>" lang="<?php echo $_TEMPLATE['langalt_' . $_PAGE['lang1']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['langalt_' . $_PAGE['lang1']]; ?>"<?php } ?> title="<?php echo $_TEMPLATE['cmblang_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmblang_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
<div id="cn-wmms"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/images/wmms.gif" width="83" height="20" alt="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?>" /></div>
<div id="cn-banner"<?php if ($_PAGE['html5'] == '1') { ?> role="banner"<?php } ?>><p id="cn-banner-text"><?php echo $_TEMPLATE['banner_text_' . $_PAGE['lang1']]; ?></p></div>
<div id="cn-bcrumb"><?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><h2><?php echo $_TEMPLATE['bcrumb_' . $_PAGE['lang1']]; ?></h2>
<ol>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/bt-fa.php"; ?>
</ol>
<?php if ($_PAGE['html5'] == '1') { ?></nav><?php } ?></div>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1b.php"; ?>