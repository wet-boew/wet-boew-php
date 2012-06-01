<?php if ($_PAGE['lang2'] != '') { } else { ?>
	<!-- Date Modified begins / Début de la date de modification -->
	<dl id="cn-doc-dates" role="contentinfo">
		<dt><?php echo $_TEMPLATE['doc_version_' . $_PAGE['lang1']]; ?></dt>
		<dd><?php echo $_PAGE['version']; ?></dd>
	</dl>
	<div class="clear"></div>
	<!-- Date Modified ends / Fin de la date de modification -->
	<?php } ?>