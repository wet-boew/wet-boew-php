<div id="cn-centre-col" <?php if ($_PAGE['html5'] == '1') { ?>role="main"<?php } ?>><div id="cn-centre-col-inner">
<!-- MainContentStart -->
<?php if ($_TEMPLATE['centre_header_file'] != '') { include $_SERVER['DOCUMENT_ROOT'] . $_TEMPLATE['centre_header_file']; }
if ($_PAGE['lang2'] != '') { ?><h1 id="cn-cont"><?php echo $_PAGE['title_' . $_PAGE['lang1']]; ?> / <span lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_PAGE['title_' . $_PAGE['lang2']]; ?></span></h1>
<?php } else { ?><h1 id="cn-cont"><?php echo $_PAGE['title_' . $_PAGE['lang1']]; ?></h1><?php } ?>