<?php
if (!empty($_PAGE['signin']) || !empty($_PAGE['signout'])) {
	echo '<section id="wb-so">';
	echo '<h2 class="wb-inv">'.$_SITE['wb_signininfo_text_'.$_LANG_].'</h2>';
	echo '<div class="container"><div class="row"><div class="col-md-12">';
	if (!empty($_PAGE['signin'])) {
		if (!empty($_PAGE['register'])) {
			echo '<a href="' . $_SITE['wb_register_href_'.$_LANG_] . '" class="btn btn-default wb-register">' . $_SITE['wb_register_text_'.$_LANG_] . '</a> ';
		}
		echo '<a href="' . $_SITE['wb_signin_href_'.$_LANG_] . '" class="btn btn-primary wb-signin">' . $_SITE['wb_signin_text_'.$_LANG_] . '</a>';
	} elseif (!empty($_PAGE['signout'])) {
		if (!empty($_SITE['wb_username_text'])) {
			echo '<p style="display:inline-block;margin-right:10px;">' . $_SITE['wb_signedinas_text_'.$_LANG_] . ' ' . $_SITE['wb_username_text'] . '</span></p>';
		}
		if (!empty($_PAGE['settings'])) {
			echo '<a href="' . $_SITE['wb_settings_href_'.$_LANG_] . '" class="btn btn-default wb-settings">' . $_SITE['wb_settings_text_'.$_LANG_] . '</a> ';
		}
		echo '<a href="' . $_SITE['wb_signout_href_'.$_LANG_] . '" class="btn btn-primary wb-signout">' . $_SITE['wb_signout_text_'.$_LANG_] . '</a>';
	}
	echo '</div></div></div>';
	echo '</section>';
}