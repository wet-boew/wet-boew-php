<div id="cn-msg-space"<?php if ($_PAGE['html5'] == '1') { ?> role="banner"<?php } ?>>
<div id="cn-upper-msg"></div>
<div id="cn-lower-msg">
<p id="cn-left-msg"><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang1']]; ?></p>
<p id="cn-right-msg" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang2']]; ?></p>
</div>
</div>

<?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><h2><?php echo $_TEMPLATE['langselect_' . $_PAGE['lang1']]; ?> / <span lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['langselect_' . $_PAGE['lang2']]; ?></span></h2>
<ul id="cn-ef-lang-links">
<li><a href="<?php echo $_PAGE['link_' . $_PAGE['lang1']]; ?>" title="<?php echo $_TEMPLATE['cmblang_title_site_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang1']]; ?></a></li>
<li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><a href="<?php echo $_PAGE['link_' . $_PAGE['lang2']]; ?>" title="<?php echo $_TEMPLATE['cmblang_title_site_' . $_PAGE['lang2']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang2']]; ?></a></li>
</ul>
<div id="cn-wmms"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/images/wmms.gif" width="83" height="20" alt="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['wmms_' . $_PAGE['lang2']]; ?>" title="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['wmms_' . $_PAGE['lang2']]; ?>" /></div>
<?php if ($_PAGE['lang3'] != '') { ?>
<ul id="cn-other-lang-links">
<?php if ($_PAGE['lang3'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang3']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang3']]; ?>"<?php } ?>><a href="<?php echo $_PAGE['link_' . $_PAGE['lang3']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang3']]; ?></a></li><?php }
if ($_PAGE['lang4'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang4']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang4']]; ?>"<?php } ?>><a href="<?php echo $_PAGE['link_' . $_PAGE['lang4']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang4']]; ?></a></li><?php }
if ($_PAGE['lang5'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang5']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang5']]; ?>"<?php } ?>><a href="<?php echo $_PAGE['link_' . $_PAGE['lang5']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang5']]; ?></a></li><?php }
if ($_PAGE['lang6'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang6']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang6']]; ?>"<?php } ?>><a href="<?php echo $_PAGE['link_' . $_PAGE['lang6']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang6']]; ?></a></li><?php }
if ($_PAGE['lang7'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang7']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang7']]; ?>"<?php } ?>><a href="<?php echo $_PAGE['link_' . $_PAGE['lang7']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang7']]; ?></a></li><?php } ?>
</ul>
<?php }
if ($_PAGE['html5'] == '1') { ?></nav><?php } ?>