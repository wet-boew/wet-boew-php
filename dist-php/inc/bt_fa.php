<?php 
$_NAV_PATH['parts'] = explode("/", urldecode($_SERVER['REQUEST_URI']));
array_pop($_NAV_PATH['parts']);
$_NAV_PATH_BASE = $_SERVER['DOCUMENT_ROOT'];
foreach($_NAV_PATH['parts'] as $_NAV_PATH_PART) {
	$_NAV_PATH_BASE .= $_NAV_PATH_PART . "/";
	if (file_exists($_NAV_PATH_BASE . "bt_fa.php")) {
		include($_NAV_PATH_BASE . "bt_fa.php");
		$title = $_NAV_PATH['title_' . $_PAGE['lang1']];
		if( $_NAV_PATH['link_'. $_PAGE['lang1']] ) {
			$title = "<a href=\"" . $_NAV_PATH['link_'.$_PAGE['lang1']] ."\">".$title."</a>";
		}
		echo "<li>" .$title ."</li>";
	}
}

echo "<li>" . $_PAGE['short_title_' . $_PAGE['lang1']] . "</li>";
?>