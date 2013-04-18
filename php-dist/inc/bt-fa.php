<?php 
$_NAVPATH['show'] = "1";
$_NAVPATH['parts'] = explode("/", urldecode($_SERVER['REQUEST_URI']));
array_pop($_NAVPATH['parts']);
$_NAVPATH_BASE = $_SERVER['DOCUMENT_ROOT'];
foreach($_NAVPATH['parts'] as $_NAVPATH_PART) {
	$_NAVPATH_BASE .= $_NAVPATH_PART . "/";
	if (file_exists($_NAVPATH_BASE . "index.php")) {
		include($_NAVPATH_BASE . "index.php");
	}
}
echo "<li>" . $_PAGE['title_' . $_PAGE['lang1']] . "</li>"; ?>