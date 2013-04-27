<?php 
$_PAGE['show'] = "1";
$_PAGE['parts'] = explode("/", urldecode($_SERVER['REQUEST_URI']));
array_pop($_PAGE['parts']);
$_PAGE_BASE = $_SERVER['DOCUMENT_ROOT'];
foreach($_PAGE['parts'] as $_PAGE_PART) {
	$_PAGE_BASE .= $_PAGE_PART . "/";
	if (file_exists($_PAGE_BASE . "index.php")) {
		include($_PAGE_BASE . "index.php");
	}
}
echo "<li>" . $_PAGE['title_' . $_PAGE['lang1']] . "</li>"; ?>