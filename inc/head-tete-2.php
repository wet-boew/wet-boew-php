<?php if ($_TEMPLATE['head_footer_file'] != '') { include $_SERVER['DOCUMENT_ROOT'] . $_TEMPLATE['head_footer_file']; } ?>

<?php if ($_PAGE['nojquery'] == '') { ?>
<script src="/js/lib/jquery.min.js"<?php if ($_PAGE['html5'] == '0') { ?> type="text/javascript"<?php } ?>></script>
<script src="/js/pe-ap.js"<?php if ($_PAGE['html5'] == '0') { ?> type="text/javascript"<?php } ?> id="progressive"></script>
<script<?php if ($_PAGE['html5'] == '0') { ?> type="text/javascript"<?php } ?>>
/* <![CDATA[ */
PE.progress(params);
/* ]]> */
</script>
<?php } ?>