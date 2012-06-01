<div id="cn-right-col" <?php if ($_PAGE['html5'] == '1') { ?>role="complementary"<?php } ?>><div id="cn-right-col-inner"><?php if ($_PAGE['html5'] == '1') { ?><section><?php } ?><h2><?php echo $_TEMPLATE['right_col_' . $_PAGE['lang1']]; ?></h2>
<div class="cn-right-col-default">
<!-- SuppContentStart -->
<?php if ($_TEMPLATE['right_header_file'] != '') { include $_SERVER['DOCUMENT_ROOT'] . $_TEMPLATE['right_header_file']; } ?>