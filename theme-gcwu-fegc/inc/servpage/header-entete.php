<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1a.php"; ?>
<!-- GC Web Usability theme begins / Début du thème de la facilité d'emploi Web GC -->
<div id="fip-title" class="span-8">
	<div id="cn-sig" class="span-4 row-start"><div id="cn-sig-inner"><div id="fip-pcim-sig-<?php echo $_PAGE['lang1']; ?>" title="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['sig_' . $_PAGE['lang2']]; ?>"><img src="/<?php echo $_TEMPLATE['theme_folder']; ?>/fip-pcim/images/<?php echo $_TEMPLATE['sig_image']; ?>-<?php echo $_PAGE['lang1']; ?>.gif" class="image-actual" width="214" height="20" alt="<?php echo $_TEMPLATE['sig_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['sig_' . $_PAGE['lang2']]; ?>" /></div></div></div>
	<div id="cn-wmms" class="span-4 row-end"><div id="cn-wmms-inner"><div id="fip-pcim-wmms" title="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['wmms_' . $_PAGE['lang2']]; ?>"><img src="/theme-gcwu-fegc/fip-pcim/images/wmms.gif" class="image-actual" width="126" height="30"  alt="<?php echo $_TEMPLATE['wmms_' . $_PAGE['lang1']]; ?> / <?php echo $_TEMPLATE['wmms_' . $_PAGE['lang2']]; ?>" /></div></div></div>
	<div class="clear"></div>
	
	<!-- Site title begins / Début du titre du site -->
	<div id="cn-site-title">
		<div id="cn-site-title-left" class="span-4 row-start"><a href="<?php echo $_TEMPLATE['banner_href_' . $_PAGE['lang1']]; ?>"><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang1']]; ?></a></div>
		<div id="cn-site-title-right" class="span-4 row-end" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><a href="<?php echo $_TEMPLATE['banner_href_' . $_PAGE['lang2']]; ?>"><?php echo $_TEMPLATE['site_title_' . $_PAGE['lang2']]; ?></a></div>
		<div class="span-8 row-start row-end"><hr /></div>
		<div class="clear"></div>
	</div>
</div>
<!-- Site title ends / Fin du titre du site -->
<!-- GC Web Usability theme ends / Fin du thème de la facilité d'emploi Web GC -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/body-corps-1b.php"; ?>