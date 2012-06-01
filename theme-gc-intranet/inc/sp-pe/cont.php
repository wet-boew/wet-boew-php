<!-- Site title begins / Début du titre du site -->
<div id="cn-site-title">
<div id="cn-site-title-left" class="span-3 margin-bottom-none"><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang1']]; ?></div>
<div class="span-2 margin-bottom-none"></div>
<div id="cn-site-title-right" class="span-3 margin-bottom-none" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang2']]; ?></div>
<div class="clear"></div>
</div>
<!-- Site title ends / Fin du titre du site -->

<!-- Language selection links begin / Début des liens de sélection de langue -->
<div id="cn-lang-links"><?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><h2><?php echo $_TEMPLATE['langselect_' . $_PAGE['lang1']]; ?> / <span lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['langselect_' . $_PAGE['lang2']]; ?></span></span></h2>
<div class="span-6 grid-12 margin-bottom-none">
<ul id="cn-ef-lang-links">
<li><div class="span-2 row-start margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang1']]; ?></a></div></li>
<li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><div class="span-2 row-end margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang2']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang2']]; ?></a></div></li>
</ul>
</div>
<div id="cn-wmms" class="span-2 margin-bottom-none"><div id="cn-wmms-inner"><div id="fip-pcim-wmms" title="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['wmms_' . $_PAGE['lang2']]; ?>"><img src="/theme-gc-intranet/fip-pcim/images/wmms.gif" width="126" height="30"  alt="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['wmms_' . $_PAGE['lang2']]; ?>" /></div></div></div>
<div class="clear"></div>
<?php if ($_PAGE['lang3'] != '') { ?>
<div class="clear"></div>
<div class="span-8 grid-12 margin-bottom-none">
<ul id="cn-other-lang-links">
<li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang3']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang3']]; ?>"<?php } ?>><div class="span-2 row-start margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang3']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang3']]; ?></a></div></li>
<?php if ($_PAGE['lang4'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang4']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang4']]; ?>"<?php } ?>><div class="span-2 margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang4']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang4']]; ?></a></div></li><?php }
if ($_PAGE['lang5'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang5']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang5']]; ?>"<?php } ?>><div class="span-2 margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang5']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang5']]; ?></a></div></li><?php }
if ($_PAGE['lang6'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang6']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang6']]; ?>"<?php } ?>><div class="span-2 margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang6']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang6']]; ?></a></div></li><?php }
if ($_PAGE['lang7'] != '') { ?><li lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang7']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang7']]; ?>"<?php } ?>><div class="span-2 row-end margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang7']]; ?>"><?php echo $_TEMPLATE['lang_text_' . $_PAGE['lang7']]; ?></a></div></li><?php } ?>
</ul>
</div>
<?php }
if ($_PAGE['html5'] == '1') { ?></nav><?php } ?></div>
<!-- Language selection links end / Fin des liens de sélection de langue -->