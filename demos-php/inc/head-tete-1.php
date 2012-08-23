<title><?php echo $_PAGE['title_' . $_PAGE['lang1']]; if ($_PAGE['lang2'] != '') { ?> | <?php echo $_PAGE['title_' . $_PAGE['lang2']]; } ?></title>

<?php if (($_PAGE['modified'] == '') || ($_PAGE['modified'] == 'YYYY-MM-DD') || ($_PAGE['modified'] == 'AAAA-MM-JJ') || ($_PAGE['modified'] == '9999-12-31')) { $_PAGE['modified'] = $_PAGE['issued']; } ?>
<meta name="dcterms.title" content="<?php echo $_PAGE['title_' . $_PAGE['lang1']]; ?>" />
<?php if ($_PAGE['lang2'] != '') { ?><meta name="dcterms.title" lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang2']]; ?>"content="<?php echo $_PAGE['title_' . $_PAGE['lang2']]; ?>" /><?php } ?>


<meta name="dcterms.issued" title="W3CDTF" content="<?php echo $_PAGE['issued']; ?>" />
<meta name="dcterms.modified" title="W3CDTF" content="<?php echo $_PAGE['modified']; ?>" />
<meta name="dcterms.language" title="ISO639-2" content="<?php echo $_PAGE['lang1']; ?>" />
<?php if ($_PAGE['lang2'] != '') { ?><meta name="dcterms.language" lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang2']]; ?>" title="ISO639-2" content="<?php echo $_PAGE['lang2']; ?>" /><?php } ?>


<meta name="viewport" content="width=device-width, initial-scale=1" />