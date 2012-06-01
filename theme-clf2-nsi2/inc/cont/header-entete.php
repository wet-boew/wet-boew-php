<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1a.php"; ?>
<div id="cn-sig"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/images/<?php echo $_TEMPLATE['sig_image']; ?>-<?php echo $_PAGE['lang1']; ?>.gif" width="372" height="20" alt="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?>" /></div>
<div id="cn-wmms"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/images/wmms.gif" width="83" height="20" alt="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?>" /></div>

<div id="cn-leaf"></div>
<div id="cn-banner"<?php if ($_PAGE['html5'] == '1') { ?> role="banner"<?php } ?>>
<p id="cn-banner-text"><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang1']]; ?></p>
<p><?php echo $_TEMPLATE['domain_' . $_PAGE['lang1']]; ?></p>
</div>

<?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?>
<div id="cn-cmb"><h2><?php echo $_TEMPLATE['cmb_' . $_PAGE['lang1']]; ?></h2>
<ul>
<li id="cn-cmb1"><a href="<?php echo $_TEMPLATE['cmblang_href_' . $_PAGE['lang1']]; ?>" lang="<?php echo $_TEMPLATE['langalt_' . $_PAGE['lang1']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['langalt_' . $_PAGE['lang1']]; ?>"<?php } ?> title="<?php echo $_TEMPLATE['cmblang_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmblang_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb2"><a href="<?php echo $_TEMPLATE['cmb2_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb2_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb2_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb3"><a href="<?php echo $_TEMPLATE['cmb3_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb3_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb3_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb4"><a href="<?php echo $_TEMPLATE['cmb4_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb4_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb4_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb5"><a rel="search" href="<?php echo $_TEMPLATE['cmb5_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb5_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb5_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-cmb6"><a rel="external" href="<?php echo $_TEMPLATE['cmb6_href_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmb6_title_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['cmb6_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div>

<div id="cn-bcrumb"><h2><?php echo $_TEMPLATE['bcrumb_' . $_PAGE['lang1']]; ?></h2>
<ol>
<?php $_PAGE['html5_orig'] = $_PAGE['html5'];
include $_SERVER['DOCUMENT_ROOT'] . "/inc/bt-fa.php";
$_PAGE['html5'] = $_PAGE['html5_orig']; ?>
</ol>
</div>
<?php if ($_PAGE['html5'] == '1') { ?></nav><?php }
include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1b.php"; ?>