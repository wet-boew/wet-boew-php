<?php include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/body-corps-1a.php"; ?>
<nav role="navigation"><div id="gcwu-gcnb"><h2><?php echo $_UNKNOWN['gc_gcnavbar_' . $_PAGE['lang1']]; ?></h2><div id="gcwu-gcnb-in"><div id="gcwu-gcnb-fip">
<div id="gcwu-sig"><div id="gcwu-sig-in"><div id="gcwu-sig-<?php echo $_PAGE['lang1']; ?>" title="<?php echo $_UNKNOWN['gc_sig_' . $_PAGE['lang1']]; ?>"><img src="/build/theme-gcwu-fegc/images/<?php echo $_UNKNOWN['gc_sig_image']; ?>-<?php echo $_PAGE['lang1']; ?>.gif" width="214" height="20" alt="<?php echo $_UNKNOWN['gc_sig_' . $_PAGE['lang1']]; ?>" /></div></div></div>
<ul>
<li id="gcwu-gcnb1"><a<?php if ($_PAGE['isapp'] == '1') { ?> target="_blank"<?php } ?> rel="external" href="<?php echo $_UNKNOWN['gc_gcnb1_href_' . $_PAGE['lang1']]; ?>"><?php echo $_UNKNOWN['gc_gcnb1_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="gcwu-gcnb2"><a<?php if ($_PAGE['isapp'] == '1') { ?> target="_blank"<?php } ?> rel="external" href="<?php echo $_UNKNOWN['gc_gcnb2_href_' . $_PAGE['lang1']]; ?>"><?php echo $_UNKNOWN['gc_gcnb2_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="gcwu-gcnb3"><a<?php if ($_PAGE['isapp'] == '1') { ?> target="_blank"<?php } ?> rel="external" href="<?php echo $_UNKNOWN['gc_gcnb3_href_' . $_PAGE['lang1']]; ?>"><?php echo $_UNKNOWN['gc_gcnb3_text_' . $_PAGE['lang1']]; ?></a></li>
<li id="gcwu-gcnb-lang"><a href="<?php echo $_UNKNOWN['gc_cmblang_href_' . $_PAGE['lang1']]; ?>" lang="<?php echo $_UNKNOWN['gc_langalt_' . $_PAGE['lang1']]; ?>"><?php echo $_UNKNOWN['gc_cmblang_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div></div></div></nav>

<div id="gcwu-bnr" role="banner"><div id="gcwu-bnr-in">
<div id="gcwu-wmms"><div id="gcwu-wmms-in"><div id="gcwu-wmms-fip" title="<?php echo $_UNKNOWN['gc_wmms_' . $_PAGE['lang1']]; ?>"><img src="/build/theme-gcwu-fegc/images/wmms.gif" width="126" height="30"  alt="<?php echo $_UNKNOWN['gc_wmms_' . $_PAGE['lang1']]; ?>" /></div></div></div>

<div id="gcwu-title"><p id="gcwu-title-in"><a href="<?php echo $_UNKNOWN['gc_banner_href_' . $_PAGE['lang1']]; ?>"><?php echo $_UNKNOWN['gc_site_title_' . $_PAGE['lang1']]; ?></a></p></div>

<?php if ($_PAGE['nosearch'] != '') { } else { ?><section role="search"><div id="gcwu-srchbx"><h2><?php echo $_UNKNOWN['gc_search_' . $_PAGE['lang1']]; ?></h2>
<?php if ($_UNKNOWN['gc_search_file'] != '') { include $_SERVER['DOCUMENT_ROOT'] . $_UNKNOWN['gc_search_file']; } ?>
</div></section>
<?php } ?>
</div></div>

<nav role="navigation">
<div id="gcwu-psnb"><h2><?php echo $_UNKNOWN['gc_sitenav_' . $_PAGE['lang1']]; ?></h2><div id="gcwu-psnb-in"><?php include $_SERVER['DOCUMENT_ROOT'] . $_UNKNOWN['gc_menuprim'] . "-" . "" . $_PAGE['lang1'] . ".php"; ?></div></div>

<?php if ($_PAGE['bcrumb_hide'] != '1') { ?><div id="gcwu-bc"><h2><?php echo $_UNKNOWN['gc_bcrumb_' . $_PAGE['lang1']]; ?></h2><div id="gcwu-bc-in">
<ol>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/bt-fa.php"; ?>
</ol>
</div></div><?php } ?>
</nav>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/body-corps-1b.php"; ?>