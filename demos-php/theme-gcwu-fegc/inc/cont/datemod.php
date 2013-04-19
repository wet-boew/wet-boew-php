<?php if ($_PAGE['lang2'] != '') { } else { ?>
<!-- Date Modified begins / Début de la date de modification -->
<dl id="gcwu-date-mod" role="contentinfo">
<dt><?php echo $_UNKNOWN['wb_doc_dates_' . $_PAGE['lang1']]; ?></dt><dd><span><time pubdate="pubdate"><?php echo $_PAGE['modified']; ?></time></span></dd>
</dl>
<div class="clear"></div>
<!-- Date Modified ends / Fin de la date de modification -->
<?php } ?>