<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1a.php";
if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><div id="cn-gcnb"><h2><?php echo $_TEMPLATE['gcnavbar_' . $_PAGE['lang1']]; ?></h2><div id="cn-gcnb-inner"><div id="fip-pcim-gcnb">
<div id="cn-sig"><div id="cn-sig-inner"><div id="fip-pcim-sig-<?php echo $_PAGE['lang1']; ?>" title="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?>"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/fip-pcim/images/<?php echo $_TEMPLATE['sig_image']; ?>-<?php echo $_PAGE['lang1']; ?>.gif" width="214" height="20" alt="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?>" /></div></div></div>
<ul>
<li id="cn-gcnb1"><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['gcnb1_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['gcnb1_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-gcnb2"><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['gcnb2_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['gcnb2_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-gcnb3"><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['gcnb3_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['gcnb3_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-gcnb-lang"><a href="<?php echo $_TEMPLATE['cmblang_href_' . $_PAGE['lang1']]; ?>" lang="<?php echo $_TEMPLATE['langalt_' . $_PAGE['lang1']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['langalt_' . $_PAGE['lang1']]; ?>"<?php } ?>><?php echo $_TEMPLATE['cmblang_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div></div></div><?php if ($_PAGE['html5'] == '1') { ?></nav><?php } ?>

<div id="cn-banner" role="banner"><div id="cn-banner-inner">
<div id="cn-wmms"><div id="cn-wmms-inner"><div id="fip-pcim-wmms" title="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?>"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/fip-pcim/images/wmms.gif" width="126" height="30"  alt="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?>" /></div></div></div>

<div id="cn-site-title"><p id="cn-site-title-inner"><a href="<?php echo $_TEMPLATE['banner_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang1']]; ?></a></p></div>

<?php if ($_PAGE['nosearch'] != '') { } else { if ($_PAGE['html5'] == '1') { ?><section role="search"><?php } ?><div id="cn-search-box"><h2><?php echo $_TEMPLATE['search_' . $_PAGE['lang1']]; ?></h2>
<?php if ($_TEMPLATE['search_file'] != '') { include $_SERVER['DOCUMENT_ROOT'] . $_TEMPLATE['search_file']; } ?>
</div><?php if ($_PAGE['html5'] == '1') { ?></section><?php }
} ?>
</div></div>

<?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?>
<div id="cn-psnb"><h2><?php echo $_TEMPLATE['sitenav_' . $_PAGE['lang1']]; ?></h2><div id="cn-psnb-inner"><?php include $_SERVER['DOCUMENT_ROOT'] . $_TEMPLATE['menuprim'] . "-" . "" . $_PAGE['lang1'] . ".php"; ?></div></div>

<?php if ($_PAGE['bcrumb_hide'] != '1') { ?><div id="cn-bc"><h2><?php echo $_TEMPLATE['bcrumb_' . $_PAGE['lang1']]; ?></h2><div id="cn-bc-inner">
<ol>
<?php $_PAGE['html5_orig'] = $_PAGE['html5'];
include $_SERVER['DOCUMENT_ROOT'] . "/inc/bt-fa.php";
$_PAGE['html5'] = $_PAGE['html5_orig']; ?>
</ol>
</div></div><?php }
if ($_PAGE['html5'] == '1') { ?></nav><?php }
include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1b.php"; ?>