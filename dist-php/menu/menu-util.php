<?php

/************************************ Public methods to be called by user ***********************************/

/*  printLanding does NOT produce a menu
 * 
 *  It can be passed a menu or sub-menu object and will return the content section for
 *  a landing page with a simple well (http://wet-boew.github.io/wet-boew-styleguide/v4/design/wells-en.html) 
 *  object with the same links that exist in the menu
 */
function printLanding($menu, $options=array()) {
	$ret = "";
	
	if( count($menu["links"]) > 0 ) {
		$ret .= "<div class=\"well\">\n";
		$ret .= "<ul>\n";
		foreach($menu["links"] as $mitem) {
			$ret .= "<li>" .printAddress($mitem) ."</li>";
		}
		$ret .= "</ul>";
		$ret .= "</div>\n";
	}
	
	return $ret;
}

/*
 * buildLeftMenu
 *
 * Takes a menu object (see sample menu object created in getTestMenu() below) and
 * builds the HTML to display a leftside menu for a PHP variant compliant site.
 */
function buildLeftMenu($menu) {
	global $_SITE, $_PAGE;

	$menuStr = "";

	/*$menuStr .= "<nav role=\"navigation\" id=\"wb-sec\" typeof=\"SiteNavigationElement\" class=\"col-md-3 col-md-pull-9 visible-md visible-lg\">\n";
	$menuStr .= "<h2>".$_SITE['wb_sec_'.$_PAGE['lang1']] ."</h2>\n";
	$menuStr .= "<ul class=\"list-group menu list-unstyled\">\n";*/

	$menuStr .= generateLeftLinksList($menu);

	/*$menuStr .= "</ul>\n";
	$menuStr .= "</nav>\n";*/

	return $menuStr;
}

/*
 * buildMegaMenu
 *
 * Takes a menu object (see sample menu object created in getTestMenu() below) and
 * builds the HTML to display a sites mega menu if the users site isn't already using
 * a Govnment of Canada approved mega menu. Should be called from the prim-megamenu-en.php
 * file, which is used by the PHP variant to load a mega menu replacing the 
 * wet-boew-php/demos-php/menu/prim-megamenu-en.php
 * 
 * (See http://wet-boew.github.io/wet-boew/demos/menu/menu-en.html)
 */
function buildMegaMenu($menu) {

	global $_PAGE;

	$menuStr = "<nav role=\"navigation\" id=\"wb-sm\" data-trgt=\"mb-pnl\" class=\"wb-menu visible-md visible-lg\" typeof=\"SiteNavigationElement\">";
	$menuStr .= "<div class=\"pnl-strt container visible-md visible-lg nvbar\">\n";
	$menuStr .= "	<h2>Site menu</h2>\n";
	$menuStr .= "	<div class=\"row\">\n";
	$menuStr .= "		<ul class=\"list-inline menu\" role=\"menubar\">\n";

	$menuStr .= generateMegaLinksList($menu);

	$menuStr .= "		</ul>\n";
	$menuStr .= "	</div>\n";
	$menuStr .= "</div>\n";
	$menuStr .= "</nav>";

	echo $menuStr;
}


/******************************** End of public methods to be called by user ********************************/

/****************************** private methods to be called by public methods ******************************/

/* printAddress returns processes an address object and returns an <a href="">...</a> tag
 * An address array is expected to be made up of the following variables
 * 
 *  (required options)
 *  $m_addr['name'] - The text to be displayed
 *  $m_addr['addr'] - the link, in the case that the addr begins with a '/' -en.php or -fr.php
 * 					will be appended to the address based on the $_PAGE['lang1'] set by calling
 * 					page. Addresses beginning with 'http:' will not have languge postfixes applied
 * 
 *  $m_addr['addr']['en'] or 
 *  $m_addr['addr']['fr'] - can be used to specify language specific addresses
 * 					where no language postfix (ie. -en or -fr) will be applied to the address
 * 
 *  $m_addr['doc'] - can be used instead of 'addr' in the even that a language postfix shouldn't
 * 					be applied, like in the case where the address points to a document
 * 
 *  (optional options)
 *  $m_addr['title'] - used as the title attribute for the a href tag
 * 			if null the 'name' is used as the title of the link. This is useful
 * 			if there are two links with the same name, but different addresses
 * 			The title can be used to distinguish the links.
*/
function printAddress($m_addr, $retLink=true, $mclass="") {
	global $_PAGE;

	//print_r($m_addr);
	$name = $m_addr["name"][$_PAGE["lang1"]];
	$title = (isset($m_addr['title'][$_PAGE["lang1"]])?$m_addr['title'][$_PAGE["lang1"]]:$name);

	$addr = "#";
	if(isset($m_addr["addr"])) {
		if( !is_array($m_addr["addr"]) ) {
			if( stristr($m_addr["addr"], "mailto:") !== false ) {
				//removes envelope icon if the address in the leftside is a "mailto" link
				$addr = $m_addr["addr"];
				$class="class=\"wb-icon-none\" ";
			} else if( stristr($m_addr["addr"], "http://") !== false || startsWith($m_addr["addr"], "#")) {
				//uses the link as is if it starts with http://
				$addr = $m_addr["addr"];
			} else {
				//adds the language prefix if this is an internal link
				$addr = $m_addr["addr"] ."-".$_PAGE["lang1"].".php";
			}
		} else {
			$addr = $m_addr["addr"][$_PAGE["lang1"]];
		}
	} else if(isset($m_addr["doc"]) ) {
		$addr = $m_addr["doc"];
	}

	//if the address is a hash symbol then we just return the name of the link with no
	//a href tag.
	if( $addr=="#" && $retLink==false ) {
		return $name;
	}

	if( isset($m_addr["anchor"]) ) {
		$addr .= $m_addr["anchor"];
	}
	$ret_addr = "<a ".(isset($class)?$class:"")."href=\"".$addr."\" title=\"".$title."\"";
	if( isset($mclass) && !$mclass=="") {
		$ret_addr .= " class=\"".$mclass."\"";
	}
	$ret_addr .= ">".$name."</a>";
	return $ret_addr;
}

/*
 * startsWith is a convience function that determines if the string $haystack starts with 
 * the character $needle
 */
function startsWith($haystack, $needle)
{
	return $needle === "" || strpos($haystack, $needle) === 0;
}

/*
 * generateLeftLinksList 
 * 
 * Creates the list of <li> objects to be used as a left side menu
 */
function generateLeftLinksList($menu, $level=0) {

	global $_PAGE;
	
	//TODO: This text should be externalized in a configuration file
	$lbl["en"] = " - More";
	$lbl["fr"] = " - Autre";
	
	$menuStr = "";
	//if either the menu item has an address associated with it or if it has
	//sub-links, print the list of
	if( isset($menu["links"]) ) {
			//If the menu item has it's own link then add a "more" link to the bottom
		//of the compressed list of menu items.
		if( isset($menu['addr'])) {
			$moreLink["name"][$_PAGE["lang1"]] = $menu["name"][$_PAGE["lang1"]] . $lbl[$_PAGE["lang1"]];
			$moreLink["addr"] = $menu["addr"];
			$menuStr .= "								<li class=\"slflnk\">".printAddress($moreLink, true, "list-group-item")."</li>\n";
		}
		
		if( isset($menu["links"]) ) {
			foreach( $menu["links"] as $link ) {
				if( isset($link["links"]) ) {
					//if the sublink has it's own list of links then recursively generate
					//expandable menus.
	
					//TODO: Probably should add an exit condition to limit the number of sub
					//menus that can be added. Say two levels.
					$menuStr .= generateLeftMenuItem($link, $level);
				} else {
					$menuStr .= "								<li>".printAddress($link, true, "list-group-item")."</li>\n";
				}
			}
		}
	}
	
	return $menuStr;
}

/*
 * generateLeftMenuItem
 * 
 * Creates a sub menu item for the left side menu
 */
function generateLeftMenuItem($menu, $level=0) {

	global $_PAGE;

	$menuStr = "";

	if( isset( $menu["links"] ) ) {
		if( $level <= 0 ) {
			/* 
			 * I don't like having the "Item - More" self link appear on top level
			 * menu as the top level menu is already expanded out. These are the 
			 * custom CSS rules that can be used to fix the look of the leftside,
			 * which can be copied into a users custom site CSS if they have one.
			 * 
			 * //Removes the padding that creates huge white space under expandable areas
			 * details[open].menu{
			 * 	padding-bottom: 0px;
			 * }
			 * 
			 * //hides the top level self links that would appear under H3 elements
			 * ul.menu li.slflnk, ul li ul.menu li.slflnk {
			 * 	display: none;
			 * }
			 * 
			 * //displays all self links below the H3 menu level
			 * ul li ul li ul.menu li.slflnk {
			 * 	display: inline;
			 * }
			 */
			
			$menuStr .= "<li><h3 class=\"wb-navcurr\">".printAddress($menu, true, "item")."</h3>\n";
			$menuStr .= "				<ul class=\"list-group menu list-unstyled\" >\n";/*id=\"".$id."\">\n";*/
			$menuStr .= generateLeftLinksList($menu, $level+1);
			$menuStr .= "				</ul>\n</li>\n";
		} else {
			$menuStr .= "						<li><details class=\"menu\"";
			
			//The following keeps the menu open to the path leading to the selected page
			if(isset($menu["addr"])) {
				$idx = strrpos($menu["addr"], "/");
				$subMenu = substr($menu["addr"], 0, $idx);
				
				if($subMenu != "" && strpos($_SERVER["REQUEST_URI"], $subMenu) !== false) {
					$menuStr .= " open=\"open\"";
				}
			}
			
			$menuStr .= ">\n";
				
			//Use the menu items name to print the compressed menu title
			$menuStr .= "							<summary class=\"well well-sm mrgn-tp-0 mrgn-bttm-0\">".$menu["name"][$_PAGE["lang1"]]."</summary>\n";
			$menuStr .= "							<ul class=\"list-group menu list-unstyled\">\n";
			$menuStr .= generateLeftLinksList($menu, $level+1);
			$menuStr .= "							</ul>\n";
			$menuStr .= "						</details></li>\n";
		}
	} else {
		$menuStr .= "							".printAddress($menu)."\n";
	}
	return $menuStr;
}

/*
 * generateMegaLinksList
 * 
 * Create and return a list of links to be used by the Mega menu API
 */
function generateMegaLinksList($menu, $level=0) {

	global $_PAGE;

	//TODO: This text should be externalized in a configuration file
	$lbl["en"] = " - More";
	$lbl["fr"] = " - Autre";

	$menuStr = "";
	//if either the menu item has an address associated with it or if it has
	//sub-links, print the list of
	if( isset($menu["links"]) ) {
		//If the menu item has it's own link then add a "more" link to the bottom
		//of the compressed list of menu items.
		if( isset($menu['addr']) ) {
			$moreLink["name"][$_PAGE["lang1"]] = $menu["name"][$_PAGE["lang1"]] . $lbl[$_PAGE["lang1"]];
			$moreLink["addr"] = $menu["addr"];
			$menuStr .= "								<li class=\"slflnk\">".printAddress($moreLink)."</li>\n";
		}

		if( isset($menu["links"]) ) {
			foreach( $menu["links"] as $link ) {
				if( isset($link["links"]) ) {
					//if the sublink has it's own list of links then recursively generate
					//expandable menus.

					//TODO: Probably should add an exit condition to limit the number of sub
					//menus that can be added. Say two levels.
					$menuStr .= generateMegaMenuItem($link, $level);
				} else {
					$menuStr .= "								<li>".printAddress($link)."</li>\n";
				}
			}
		}
	}

	return $menuStr;
}

/*
 * generateMegaMenuItem
 * 
 * Creates and returns a mega menu <li> item
 */
function generateMegaMenuItem($menu, $level=0) {

	global $_PAGE;
	
	$menuStr = "";
	
	if( isset( $menu["links"] ) ) {
		if( $level <= 0 ) {
			$id = "id" . rand();
			$mid["name"][$_PAGE["lang1"]] = $menu["name"][$_PAGE["lang1"]];
			$mid["addr"] = "#" .$id;
			
			$menuStr .= "<li>".printAddress($mid, true, "item")."\n";
			$menuStr .= "				<ul class=\"sm list-unstyled\" id=\"".$id."\" role=\"menu\">\n";
			$menuStr .= generateMegaLinksList($menu, $level+1);
			$menuStr .= "				</ul>\n</li>\n";
		} else {
			$menuStr .= "						<li><details>\n";
			
			//Use the menu items name to print the compressed menu title
			$menuStr .= "							<summary>".$menu["name"][$_PAGE["lang1"]]."</summary>\n";
			$menuStr .= "							<ul role=\"menu\">\n";
			$menuStr .= generateMegaLinksList($menu, $level+1);
			$menuStr .= "							</ul>\n";
			$menuStr .= "						</details></li>\n";
		}
	} else {
		$menuStr .= "							".printAddress($menu)."\n";
	}
	return $menuStr;
}

/*
 * getTestMenu() creates a test menu object to be fed to the build menu methods to
 * test the output of the methods.
 */
function getTestMenu() {

	$tmp["name"]["en"] = "eTestMenu";
	$tmp["name"]["fr"] = "fTestMenu";

	$tmp1["name"]["en"] = "eSection 1";
	$tmp1["name"]["fr"] = "fSection 1";
	
	$tmp1_1["name"]["en"] = "eSection 1.1";
	$tmp1_1["name"]["fr"] = "fSection 1.1";
	$tmp1_1["addr"] = "#";
	
	$tmp1_2["name"]["en"] = "eSection 1.2";
	$tmp1_2["name"]["fr"] = "fSection 1.2";
	$tmp1_2["addr"] = "#";
	
	$tmp1_3["name"]["en"] = "eSection 1.3";
	$tmp1_3["name"]["fr"] = "fSection 1.3";
	$tmp1_3["addr"] = "#";
	
	$tmp1_4["name"]["en"] = "eSection 1.4";
	$tmp1_4["name"]["fr"] = "fSection 1.4";
	$tmp1_4["addr"] = "#";
	
	$tmp1_5["name"]["en"] = "eSection 1.5";
	$tmp1_5["name"]["fr"] = "fSection 1.5";
	$tmp1_5["addr"] = "#";
	
	$tmp1_6["name"]["en"] = "eSection 1.6";
	$tmp1_6["name"]["fr"] = "fSection 1.6";
	$tmp1_6["addr"] = "#";
	
	//add all sub 1.x menus to 1 menu
	$tmp1["links"] = array( $tmp1_1, $tmp1_2, $tmp1_3, $tmp1_4, $tmp1_5, $tmp1_6);
	
	$tmp2["name"]["en"] = "eSection 2";
	$tmp2["name"]["fr"] = "fSection 2";
	$tmp2["addr"] = "#";
	
	$tmp2_1["name"]["en"] = "eSection 2.1";
	$tmp2_1["name"]["fr"] = "fSection 2.1";
	$tmp2_1["addr"] = "#";
	
	$tmp2_2["name"]["en"] = "eSection 2.2";
	$tmp2_2["name"]["fr"] = "fSection 2.2";
	$tmp2_2["addr"] = "#";
	
	//add all sub 2.x menus to 2 menu
	$tmp2["links"] = array($tmp2_1,$tmp2_2 );
	
	$tmp3["name"]["en"] = "eSection 3";
	$tmp3["name"]["fr"] = "fSection 3";

	$tmp3_1["name"]["en"] = "eSection 3.1";
	$tmp3_1["name"]["fr"] = "fSection 3.1";
	$tmp3_1["addr"] = "#";

	$tmp3_1_1["name"]["en"] = "Item 3.1.1";
	$tmp3_1_1["name"]["fr"] = "Item 3.1.1";
	$tmp3_1_1["addr"] = "#";

	$tmp3_1_1_a["name"]["en"] = "Item 3.1.1.a";
	$tmp3_1_1_a["name"]["fr"] = "Item 3.1.1.a";
	$tmp3_1_1_a["addr"] = "#";
	//add sublinks to parent menu
	$tmp3_1_1["links"] = array( $tmp3_1_1_a );

	$tmp3_1_2["name"]["en"] = "Item 3.1.2";
	$tmp3_1_2["name"]["fr"] = "Item 3.1.2";
	$tmp3_1_2["addr"] = "#";

	$tmp3_1_3["name"]["en"] = "Item 3.1.3";
	$tmp3_1_3["name"]["fr"] = "Item 3.1.3";
	$tmp3_1_3["addr"] = "#";

	$tmp3_1_4["name"]["en"] = "Item 3.1.4";
	$tmp3_1_4["name"]["fr"] = "Item 3.1.4";
	$tmp3_1_4["addr"] = "#";

	$tmp3_1_5["name"]["en"] = "Item 3.1.5";
	$tmp3_1_5["name"]["fr"] = "Item 3.1.5";
	$tmp3_1_5["addr"] = "#";

	$tmp3_1_6["name"]["en"] = "Item 3.1.6";
	$tmp3_1_6["name"]["fr"] = "Item 3.1.6";
	$tmp3_1_6["addr"] = "#";

	//add all sub 3.1.x menus to 3.1 menu
	$tmp3_1["links"] = array( $tmp3_1_1 );

	$tmp3_2["name"]["en"] = "eSection 3.2";
	$tmp3_2["name"]["fr"] = "fSection 3.2";
	$tmp3_2["addr"] = "#";

	$tmp3_3["name"]["en"] = "eSection 3.3";
	$tmp3_3["name"]["fr"] = "fSection 3.3";
	$tmp3_3["addr"] = "#";

	$tmp3_3_1["name"]["en"] = "Item 3.3.1";
	$tmp3_3_1["name"]["fr"] = "Item 3.3.1";
	$tmp3_3_1["addr"] = "#";

	//add all sub 3.1.x menus to 3.1 menu
	$tmp3_3["links"] = array( $tmp3_3_1 );

	$tmp3_4["name"]["en"] = "eSection 3.4";
	$tmp3_4["name"]["fr"] = "fSection 3.4";
	$tmp3_4["addr"] = "#";

	$tmp3_4_1["name"]["en"] = "Item 3.4.1";
	$tmp3_4_1["name"]["fr"] = "Item 3.4.1";
	$tmp3_4_1["addr"] = "#";

	$tmp3_4_2["name"]["en"] = "Item 3.4.2";
	$tmp3_4_2["name"]["fr"] = "Item 3.4.2";
	$tmp3_4_2["addr"] = "#";

	//add all sub 3.1.x menus to 3.1 menu
	$tmp3_4["links"] = array( $tmp3_4_1, $tmp3_4_2 );

	//add all sub 3.x menus to 3 menu
	$tmp3["links"] = array( $tmp3_1, $tmp3_2, $tmp3_3, $tmp3_4 );

	$tmp["links"] = array($tmp1, $tmp2, $tmp3);

	return $tmp;
}


?>