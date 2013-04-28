<?php
	$_MOD_TEXT_ = $_SITE['wb_doc_dates_'.$_PAGE['lang1']];
	$_DATE_VERSION_TEXT_ = "<span><time>".$_PAGE['modified']."</time></span>";
	if( $_PAGE['isapp'] == "1" ) {
		$_MOD_TEXT_ = $_SITE['wb_doc_version_' . $_PAGE['lang1']];
		$_DATE_VERSION_TEXT_ = $_PAGE['version'];
	}
?>

<dl id="base-date-mod" role="contentinfo">
<dt><?php echo $_MOD_TEXT_; ?></dt><dd><?php echo $_DATE_VERSION_TEXT_?></dd>
</dl>
