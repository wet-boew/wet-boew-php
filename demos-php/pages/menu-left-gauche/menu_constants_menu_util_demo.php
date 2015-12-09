<?php 

/*
 * The $demo_menu will be the top level menu, its "name" and "addr" aren't displayed.
 * It's a place holder, the root, of all level one menus added below. Essentially it's just
 * an array of level one menu items.
 */
$demo_menu["links"] = array();

/*
 * $demo_menu_top is a level one menu, its "name" will be displayed at the top of the main menu and will be
 * linked to the address specified by "addr". It also contains a list of "links" or level two menu items
 * to be displayed under it.
 */
$demo_menu_top["name"] = array("en" => "Content page - Secondary menu", "fr" => "Page de contenu - Menu Secondaire");
$demo_menu_top["addr"] = "#";
$demo_menu_top["links"] = array();

/*
 * $demo_menu_sub1 is a leaf node (meaning it has no sub menus) level two menu.
 */
$demo_menu_sub1["name"] = array("en" => "Item&#32;1", "fr" => "Article&#32;1");
$demo_menu_sub1["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub1);

/*
 * $demo_menu_sub2 is a branch node (meaning it has at least one sub menu) level two menu.
 * 
 * It'll appear as an expandable menu in the left side with an additional "Item 2 - More" or
 * "Article 2 - Autre" link as the first link under it followed by the sub menus
 */
$demo_menu_sub2["name"] = array("en" => "Item&#32;2", "fr" => "Article&#32;2");
$demo_menu_sub2["addr"] = $_SITE['wb_website_root'] . "/index";
$demo_menu_sub2["links"] = array();

/*
 * $demo_menu_sub2a is a leaf node level three menu belonging to $demo_menu_sub2
 */
$demo_menu_sub2a["name"] = array("en" => "Item&#32;2a", "fr" => "Article&#32;2a");
$demo_menu_sub2a["addr"] = $_SITE['wb_website_root'] . "/index";

//have to add the $demo_menu_sub2a to the $demo_menu_sub2["links"] array
array_push($demo_menu_sub2["links"], $demo_menu_sub2a);
array_push($demo_menu_top["links"], $demo_menu_sub2);

$demo_menu_sub3["name"] = array("en" => "Item&#32;3", "fr" => "Article&#32;3");
$demo_menu_sub3["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub3);

$demo_menu_sub4["name"] = array("en" => "Item&#32;4", "fr" => "Article&#32;4");
$demo_menu_sub4["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub4);

$demo_menu_sub5["name"] = array("en" => "Item&#32;5", "fr" => "Article&#32;5");
$demo_menu_sub5["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub5);

$demo_menu_sub6["name"] = array("en" => "Item&#32;6", "fr" => "Article&#32;6");
$demo_menu_sub6["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub6);

$demo_menu_sub7["name"] = array("en" => "Item&#32;7", "fr" => "Article&#32;7");
$demo_menu_sub7["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub7);

$demo_menu_sub8["name"] = array("en" => "Item&#32;8", "fr" => "Article&#32;8");
$demo_menu_sub8["addr"] = $_SITE['wb_website_root'] . "/index";
array_push($demo_menu_top["links"], $demo_menu_sub8);

//add the $demo_menu_top menu to the $demo_menu["links"] array
array_push($demo_menu["links"], $demo_menu_top);
?>