<?php
	
	if( file_exists($_SITE['wb_search_file']) ) {
		include_once $_SITE['wb_search_file'];
	} else if(file_exists($_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_search_file'])) {
		include_once $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_search_file'];
	} else {
		echo "Could not find file '".$_SITE['wb_search_file']."' or '" .$_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_search_file'].";";
	}
?>