<?php

//get the path to the current folder this file resides in. 
$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'];

$file_path = realpath(dirname(__FILE__));

//realpath on windows will return the path using backslashes
$file_path = preg_replace("(\\\\)", "/", $file_path);

//remove the document root from the path to this file
$file_path = preg_replace("(".$_ROOT_PATH_.")", "", $file_path);

//on linux and Unix servers the forward slash needs to be added
$_PATH_ = ((strtoupper(substr(PHP_OS, 0, 3)) == 'WIN')?"":"/") .$file_path;

$_NAVPATH['title_eng'] = "Base Theme";
$_NAVPATH['link_eng'] = $_PATH_ ."/index-eng.php";

$_NAVPATH['title_fra'] = "Thème de base";
$_NAVPATH['link_fra'] = $_PATH_ ."/index-fra.php";
?>