<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2a.php";
if ($_PAGE['html5'] == '1') { ?><nav role="navigation"><?php } ?><div id="cn-sft"><h3><?php echo $_TEMPLATE['sitefooter_' . $_PAGE['lang1']]; ?></h3><div id="cn-sft-inner">
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-1-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-2-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-3-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<section><div class="span-2"><?php include $_SERVER['DOCUMENT_ROOT'] . "/" . $_TEMPLATE['theme_folder'] . "/menu/trail-4-" . "" . $_PAGE['lang1'] . ".php"; ?></div></section>
<div id="cn-ft-tctr">
<ul>
<li class="terms"><a href="<?php echo $_TEMPLATE['terms_href_' . $_PAGE['lang1']]; ?>" rel="license"><?php echo $_TEMPLATE['terms_text_' . $_PAGE['lang1']]; ?></a></li>
<li class="trans"><a href="<?php echo $_TEMPLATE['trans_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['trans_text_' . $_PAGE['lang1']]; ?></a></li>
</ul>
</div>
</div></div><?php if ($_PAGE['html5'] == '1') { ?></nav><?php }
include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-2b.php"; ?>