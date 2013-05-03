<?php

//get the path to the current folder this file resides in. 
$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'];
if( strpos($_ROOT_PATH_, "\\") > 0 ) {
	//windows servers
	$_ROOT_PATH_ = preg_replace("(\\\)", "\\\\\\", $_ROOT_PATH_);
}
//Remove the server root path to make the path a nice URL relaitve path
$_PATH_ = ((strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"":"/") .preg_replace("(".$_ROOT_PATH_.")", "", realpath(dirname(__FILE__)));

$_NAVPATH['title_eng'] = "Base Theme";
$_NAVPATH['link_eng'] = $_PATH_ ."/index-eng.php";

$_NAVPATH['title_fra'] = "Thème de base";
$_NAVPATH['link_fra'] = $_PATH_ ."/index-fra.php";
?>