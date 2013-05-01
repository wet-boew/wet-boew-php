<?php

//get the path to the current folder this file resides in. 
$_ROOT_PATH_ = preg_replace("(\\\)", "\\\\\\", $_SERVER['DOCUMENT_ROOT']);

//Remove the server root path to make the path a nice URL relaitve path
$_PATH_ = preg_replace("(".$_ROOT_PATH_.")", "", realpath(dirname(__FILE__)));

$_NAV_PATH['title_eng'] = "WET theme";
$_NAV_PATH['link_eng'] = $_PATH_ ."/index-eng.php";

$_NAV_PATH['title_fra'] = "Thème de la BOEW";
$_NAV_PATH['link_fra'] = $_PATH_ ."/index-fra.php";
?>