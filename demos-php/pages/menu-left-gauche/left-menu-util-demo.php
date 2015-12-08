<?php 

/*Include the menu-util.php file*/
include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/menu/menu-util.php";

/*Include the constants file that contains the data for the menu to be constructed*/
include "menu_constants_menu_util_demo.php";

/*
 * Call the build left menu method from menu-util with the $DEMO_MENU object created in the
 * menu_constants_menu_util_demo.php file
 */
echo buildLeftMenu($demo_menu);
?>