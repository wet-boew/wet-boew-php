<?php

	$_SIG_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['base_sig_image'].'-blk-' . $_PAGE['lang1'];
	$_SIG_FALL_IMG_ = $_SITE['wb_core_dist_folder'] . $_SITE['wb_theme_folder'] .'/images/'.$_SITE['base_sig_image'].'-' . $_PAGE['lang1'];
	$_SIG_ALT_ = $_SITE['base_sig_' . $_PAGE['lang1']];
?>

<!-- HeaderStart -->
<div id="base-sig" class="span-8"><div id="base-sig-in"><object data="<?php echo $_SIG_IMG_ ?>.svg" role="img" tabindex="-1" aria-label="<?php echo $_SIG_ALT_ ?>" type="image/svg+xml"><img src="<?php echo $_SIG_FALL_IMG_ ?>-alt.png" class="image-actual" alt="<?php echo $_SIG_ALT_ ?>" /></object></div></div>
<!-- HeaderEnd -->
