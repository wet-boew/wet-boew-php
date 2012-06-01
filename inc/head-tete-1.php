<title><?php echo $_PAGE['title_' . $_PAGE['lang1']]; if ($_PAGE['lang2'] != '') { ?> | <?php echo $_PAGE['title_' . $_PAGE['lang2']]; } ?></title>

<?php if ($_PAGE['html5'] == '0') { ?><link rel="schema.dcterms" href="http://purl.org/dc/terms/" /><?php } ?>

<?php if (($_PAGE['modified'] == '') || ($_PAGE['modified'] == 'YYYY-MM-DD') || ($_PAGE['modified'] == 'AAAA-MM-JJ') || ($_PAGE['modified'] == '9999-12-31')) { $_PAGE['modified'] = $_PAGE['issued']; } ?>
<meta name="dcterms.title" content="<?php echo $_PAGE['title_' . $_PAGE['lang1']]; ?>" />
<?php if ($_PAGE['lang2'] != '') { ?><meta name="dcterms.title" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?> content="<?php echo $_PAGE['title_' . $_PAGE['lang2']]; ?>" /><?php } ?>

<?php if ($_PAGE['html5'] == '1') { ?>
<meta name="dcterms.issued" title="W3CDTF" content="<?php echo $_PAGE['issued']; ?>" />
<meta name="dcterms.modified" title="W3CDTF" content="<?php echo $_PAGE['modified']; ?>" />
<meta name="dcterms.language" title="ISO639-2" content="<?php echo $_PAGE['lang1']; ?>" />
<?php if ($_PAGE['lang2'] != '') { ?><meta name="dcterms.language" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>" title="ISO639-2" content="<?php echo $_PAGE['lang2']; ?>" /><?php }
} else { ?>
<meta name="dcterms.issued" scheme="W3CDTF" content="<?php echo $_PAGE['issued']; ?>" />
<meta name="dcterms.modified" scheme="W3CDTF" content="<?php echo $_PAGE['modified']; ?>" />
<meta name="dcterms.language" scheme="ISO639-2" content="<?php echo $_PAGE['lang1']; ?>" />
<?php if ($_PAGE['lang2'] != '') { ?><meta name="dcterms.language" lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?> scheme="ISO639-2" content="<?php echo $_PAGE['lang2']; ?>" /><?php }
} ?>

<link href="/css/base.css" rel="stylesheet" type="text/css" />
<!--[if IE 8]><link href="/css/base-ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if IE 7]><link href="/css/base-ie7.css" rel="stylesheet" type="text/css" /><![endif]-->
<!--[if lte IE 6]><link href="/css/base-ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

<script>
/* <![CDATA[ */
	if(typeof(params) == "undefined") {
		var params = {};
	}
/* ]]> */
</script>