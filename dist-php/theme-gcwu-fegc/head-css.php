<?php
//do not add this css if this if for a splash page
if( !isset($_PAGE['issplash']) || (isset($_PAGE['issplash']) && $_PAGE['issplash'] != 1 )) {
	echo '<link rel="stylesheet" href="' . $_SITE['wb_core_dist_folder'] . '/css/ie8-theme.min.css"/>' .PHP_EOL;
}
?>