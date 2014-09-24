<?php
$_SIG_IMG_ = $_SITE['gcwu_sig_alt_image_'.$_PAGE['lang1']];
$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

$_WMMS_IMG_ = $_SITE['gcwu_wmms_alt_image_'.$_PAGE['lang1']];
$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
?>
<div id="wb-bnr" class="row">
<div class="row">
<div class="col-sm-6">
<object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="<?php echo $_SIG_IMG_; ?>" aria-label="<?php echo $_SIG_ALT_; ?>"></object>
</div>
<div class="col-sm-6">
<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="<?php  echo $_WMMS_IMG_; ?>" aria-label="<?php echo $_WMMS_ALT_; ?>"></object>
</div>
</div>
</div>