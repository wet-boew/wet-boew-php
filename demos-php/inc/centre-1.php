<div id="wb-main" role="main"><div id="wb-main-in">
<!-- MainContentStart -->
<?php if ($_TEMPLATE['centre_header_file'] != '') { include $_SERVER['DOCUMENT_ROOT'] . $_TEMPLATE['centre_header_file']; } ?>
<?php if ($_PAGE['lang2'] != '') { ?><h1 id="wb-cont"><?php echo $_PAGE['title_' . $_PAGE['lang1']]; ?> / <span lang="<?php echo $_UNKNOWN['gcwu_meta_' . $_PAGE['lang2']]; ?>"><?php echo $_PAGE['title_' . $_PAGE['lang2']]; ?></span></h1>
<?php } else { ?><h1 id="wb-cont"><?php echo $_PAGE['title_' . $_PAGE['lang1']]; ?></h1><?php } ?>