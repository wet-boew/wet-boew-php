<!-- Site title begins / Début du titre du site -->
<div id="gcwu-title">
<div id="gcwu-title-left" class="span-3 margin-bottom-none"><?php echo $_UNKNOWN['gc_site_title_' . $_PAGE['lang1']]; ?></div>
<div class="span-2 margin-bottom-none"></div>
<div id="gcwu-title-right" class="span-3 margin-bottom-none" lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang2']]; ?>"><?php echo $_UNKNOWN['gc_site_title_' . $_PAGE['lang2']]; ?></div>
<div class="clear"></div>
</div>
<!-- Site title ends / Fin du titre du site -->

<!-- Language selection links begin / Début des liens de sélection de langue -->
<div id="gcwu-lang"><nav role="navigation"><h2><?php echo $_UNKNOWN['gc_langselect_' . $_PAGE['lang1']]; ?> / <span lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang2']]; ?>"><?php echo $_UNKNOWN['gc_langselect_' . $_PAGE['lang2']]; ?></span></h2>
<div class="span-6 grid-12 margin-bottom-none">
<ul id="gcwu-ef-lang">
<li><div class="span-2 row-start margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang1']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang1']]; ?></a></div></li>
<li lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang2']]; ?>"><div class="span-2 row-end margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang2']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang2']]; ?></a></div></li>
</ul>
</div>
<div id="gcwu-wmms" class="span-2 margin-bottom-none"><div id="gcwu-wmms-in"><div id="gcwu-wmms-fip" title="<?php echo $_UNKNOWN['gc_wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_UNKNOWN['gc_wmms_' . $_PAGE['lang2']]; ?>"><img src="/build/theme-gcwu-fegc/images/wmms.gif" width="126" height="30"  alt="<?php echo $_UNKNOWN['gc_wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_UNKNOWN['gc_wmms_' . $_PAGE['lang2']]; ?>" /></div></div></div>
<div class="clear"></div>
<?php if ($_PAGE['lang3'] != '') { ?>
<div class="clear"></div>
<div class="span-8 grid-12 margin-bottom-none">
<ul id="gcwu-other-lang">
<li lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang3']]; ?>"><div class="span-2 row-start margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang3']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang3']]; ?></a></div></li>
<?php if ($_PAGE['lang4'] != '') { ?><li lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang4']]; ?>"><div class="span-2 margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang4']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang4']]; ?></a></div></li><?php } ?>
<?php if ($_PAGE['lang5'] != '') { ?><li lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang5']]; ?>"><div class="span-2 margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang5']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang5']]; ?></a></div></li><?php } ?>
<?php if ($_PAGE['lang6'] != '') { ?><li lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang6']]; ?>"><div class="span-2 margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang6']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang6']]; ?></a></div></li><?php } ?>
<?php if ($_PAGE['lang7'] != '') { ?><li lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang7']]; ?>"><div class="span-2 row-end margin-bottom-none"><a href="<?php echo $_PAGE['link_' . $_PAGE['lang7']]; ?>"><?php echo $_UNKNOWN['gcwu_lang_text_' . $_PAGE['lang7']]; ?></a></div></li><?php } ?>
</ul>
</div>
<?php } ?>
</nav></div>
<!-- Language selection links end / Fin des liens de sélection de langue -->
