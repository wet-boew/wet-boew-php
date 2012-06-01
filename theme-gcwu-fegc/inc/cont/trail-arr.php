<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2a.php";
if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><div id="cn-sft"><h3><?php echo $_TEMPLATE['sitefooter_' . $_PAGE['lang1']]; ?></h3><div id="cn-sft-inner">
<div id="cn-ft-tctr">
<ul>
<li class="terms"><a href="<?php echo $_TEMPLATE['terms_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_TEMPLATE['terms_text_' . $_PAGE['lang1']]; ?></a></li>
<li class="trans"><a href="<?php echo $_TEMPLATE['trans_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['trans_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div>
<div class="clear"></div>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-1-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-2-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-3-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-4-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
</div></div><?php if ($_PAGE['html5'] == '1') { ?></nav><?php } ?>

<?php if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><div id="cn-gcft"><h3><?php echo $_TEMPLATE['gcfooter_' . $_PAGE['lang1']]; ?></h3><div id="cn-gcft-inner"><div id="fip-pcim-gcft">
<ul>
<li><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['trail1_href_' . $_PAGE['lang1']]; ?>"><span><?php echo $_TEMPLATE['trail1_text_' . $_PAGE['lang1']]; ?></span><br /><?php echo $_TEMPLATE['trail1_textsub_' . $_PAGE['lang1']]; ?></a></li>
<li><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['trail2_href_' . $_PAGE['lang1']]; ?>"><span><?php echo $_TEMPLATE['trail2_text_' . $_PAGE['lang1']]; ?></span><br /><?php echo $_TEMPLATE['trail2_textsub_' . $_PAGE['lang1']]; ?></a></li>
<li><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['trail3_href_' . $_PAGE['lang1']]; ?>"><span><?php echo $_TEMPLATE['trail3_text_' . $_PAGE['lang1']]; ?></span><br /><?php echo $_TEMPLATE['trail3_textsub_' . $_PAGE['lang1']]; ?></a></li>
<li><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['trail4_href_' . $_PAGE['lang1']]; ?>"><span><?php echo $_TEMPLATE['trail4_text_' . $_PAGE['lang1']]; ?></span><br /><?php echo $_TEMPLATE['trail4_textsub_' . $_PAGE['lang1']]; ?></a></li>
<li><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['trail5_href_' . $_PAGE['lang1']]; ?>"><span><?php echo $_TEMPLATE['trail5_text_' . $_PAGE['lang1']]; ?></span><br /><?php echo $_TEMPLATE['trail5_textsub_' . $_PAGE['lang1']]; ?></a></li>
<li id="cn-ft-ca"><div><a<?php if ($_PAGE['isapp'] == '1') { ?> <?php if ($_PAGE['html5'] == '1') { ?>target="_blank"<?php } else { ?>class="wet-newwindow"<?php } } ?> rel="external" href="<?php echo $_TEMPLATE['trail_canada_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['trail_canada_text_' . $_PAGE['lang1']]; ?></a></div></li>
</ul>
</div></div></div><?php if ($_PAGE['html5'] == '1') { ?></nav><?php }
include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2b.php"; ?>