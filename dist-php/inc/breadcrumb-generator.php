<?php 
$_NAVPATH['parts'] = explode("/", urldecode($_SERVER['REQUEST_URI']));
array_pop($_NAVPATH['parts']);
$_NAVPATH_BASE = $_SERVER['DOCUMENT_ROOT'];
foreach($_NAVPATH['parts'] as $_NAVPATH_PART) {
	$_NAVPATH_BASE .= $_NAVPATH_PART . "/";
	if (file_exists($_NAVPATH_BASE . "bt_fa.php")) {
		include($_NAVPATH_BASE . "bt_fa.php");
		$title = $_NAVPATH['title_' . $_PAGE['lang1']];
		if( $_NAVPATH['link_'. $_PAGE['lang1']] ) {
			$title = "<a href=\"" . $_NAVPATH['link_'.$_PAGE['lang1']] ."\">".$title."</a>";
		}
		echo "<li>" .$title ."</li>";
	}
}

echo "<li>" . $_PAGE['short_title_' . $_PAGE['lang1']] . "</li>";
?>