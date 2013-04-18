<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/body-corps-1a.php";

//Add the GCWU navigation bar, This appears in the black banner at the top
//of the non-mobile version of the page or as a series of buttons at the bottom
//of the mobile version.
echo '<nav role="navigation"><div id="gcwu-gcnb">';
echo '<h2>' . $_UNKNOWN['gc_gcnavbar_' . $_PAGE['lang1']] . '</h2>';
echo '<div id="gcwu-gcnb-in"><div id="gcwu-gcnb-fip">';
echo '<div id="gcwu-sig"><div id="gcwu-sig-in">';

//path and titel for the SVG and PNG fallback image. Use the $_PAGE['lang1'] 
//variable to determine which image should be displayed
$SIG_IMG_PATH = '/dist/theme-gcwu-fegc/images/sig-' .$_PAGE['lang1'];
$SIG_IMG_TITLE = $_UNKNOWN['gc_sig_' . $_PAGE['lang1']];

//use the SVG image for compatiable browsers
echo '<object data="' .$SIG_IMG_PATH .'.svg" role="img" tabindex="-1" aria-label="' . $SIG_IMG_TITLE .'" type="image/svg+xml">';
//fall back image for non-SVG compatiable browsers.
echo '<img src="' .$SIG_IMG_PATH . '.png" alt="' . $SIG_IMG_TITLE . '" />';

echo '</object></div></div>';

//if $_PAGE['isapp'] is not equal to '1' then the $TARGET varialbe will be left blank
$TARGET = "";
if ($_PAGE['isapp'] == '1') { 
  $TARGET = 'target="_blank" ';
}

//Add the text and links for GCWU navigation bar
echo '<ul>';

echo '<li id="gcwu-gcnb1">';
echo '<a ' .$TARGET .'rel="external" href="' . $_UNKNOWN['gc_gcnb1_href_' . $_PAGE['lang1']] .'">';
echo $_UNKNOWN['gc_gcnb1_text_' . $_PAGE['lang1']];
echo "</a></li>";


echo '<li id="gcwu-gcnb2">';
echo '<a ' .$TARGET .'rel="external" href="' . $_UNKNOWN['gc_gcnb2_href_' . $_PAGE['lang1']] .'">';
echo $_UNKNOWN['gc_gcnb2_text_' . $_PAGE['lang1']];
echo "</a></li>";

echo '<li id="gcwu-gcnb3">';
echo '<a ' .$TARGET .'rel="external" href="' . $_UNKNOWN['gc_gcnb3_href_' . $_PAGE['lang1']] .'">';
echo $_UNKNOWN['gc_gcnb3_text_' . $_PAGE['lang1']];
echo "</a></li>";

//the language swap option. If the $_PAGE['nolang'] isn't set or if it is set, but is left blank
//display the alternate language option on the navigation bar
if (!isset($_PAGE['nolang']) || (isset($_PAGE['nolang']) && $_PAGE['nolang']=='')) { 
	echo '<li id="gcwu-gcnb-lang">';
	echo '<a href="' .$_UNKNOWN['gc_cmblang_href_' . $_PAGE['lang1']];
	echo '" lang="' .$_UNKNOWN['gc_langalt_' . $_PAGE['lang1']];
	echo '">' . $_UNKNOWN['gc_cmblang_text_' . $_PAGE['lang1']]; 
	echo '</a></li>';
}

echo '</ul>';
echo '</div></div></div></nav>';
//END OF THE GCWU NAVIGATION BAR

//The Sites title, the 'CANADA' image logo and the search bar
echo '<div id="gcwu-bnr" role="banner"><div id="gcwu-bnr-in">';
echo '<div id="gcwu-wmms"><div id="gcwu-wmms-in">';

//path and titel for the SVG and PNG fallback image.
$CAN_IMG_PATH = "/dist/theme-gcwu-fegc/images/wmms";
$CAN_IMG_TITLE = $_UNKNOWN['gc_wmms_' . $_PAGE['lang1']];

//use the SVG image for compatiable browsers
echo '<object data="' .$CAN_IMG_PATH .'.svg" role="img" tabindex="-1" aria-label="'.$CAN_IMG_TITLE.'" type="image/svg+xml">';
//fall back image for non-SVG compatiable browsers.
echo '<img src="' .$CAN_IMG_PATH .'.png" alt="'.$CAN_IMG_TITLE.'" />';

echo '</object></div></div>';

echo '<div id="gcwu-title"><p id="gcwu-title-in">';
echo '<a href="' .$_UNKNOWN['gc_banner_href_' . $_PAGE['lang1']] .'">' . $_UNKNOWN['gc_site_title_' . $_PAGE['lang1']].'</a></p></div>';

//Display the search bar. if the $_PAGE['nosearch'] variable isn't set or isset, but left
//blank display the search bar
if (!isset($_PAGE['nosearch']) || (isset($_PAGE['nosearch']) && $_PAGE['nosearch'] != '')) { 
	echo '<section role="search"><div id="gcwu-srchbx"><h2>'.$_UNKNOWN['gc_search_' . $_PAGE['lang1']] .'</h2>';
	if ($_UNKNOWN['gc_search_file'] != '') { 
		include $_SERVER['DOCUMENT_ROOT'] . $_UNKNOWN['gc_search_file']; 
	}
	echo '</div></section>';
}

echo '</div></div>';
//END OF title, the 'CANADA' image logo and the search bar section

//Handle the mega menu and bread crumb trail
if ((!isset($_PAGE['nositemenu']) || (isset($_PAGE['nositemenu']) && $_PAGE['nositemenu'] != '1')) ||
	(!isset($_PAGE['bcrumb_hide']) || (isset($_PAGE['bcrumb_hide']) && $_PAGE['bcrumb_hide'] != '1'))) { 
	echo '<nav role="navigation">';

	//Mega Menu
	if (!isset($_PAGE['nositemenu']) || (isset($_PAGE['nositemenu']) && $_PAGE['nositemenu'] != '1')) { 
		echo '<div id="gcwu-psnb"><h2>'.$_UNKNOWN['gc_sitenav_' . $_PAGE['lang1']].'</h2>';
		echo '<div id="gcwu-psnb-in">';
		
		include $_SERVER['DOCUMENT_ROOT'] . $_UNKNOWN['gc_menuprim'] . "-" . "" . $_PAGE['lang1'] . ".php";
		
		echo '</div></div>';
	}
	
	//Breadcrumb trail
	if (!isset($_PAGE['bcrumb_hide']) || (isset($_PAGE['bcrumb_hide']) && $_PAGE['bcrumb_hide'] != '1')) { 
		echo '<div id="gcwu-bc"><h2>'.$_UNKNOWN['gc_bcrumb_' . $_PAGE['lang1']] .'</h2>';
		echo '<div id="gcwu-bc-in">';
		echo '<ol>';
		
		include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/bt-fa.php";
		
		echo '</ol>';
		echo '</div></div>';
	}
	echo '</nav>';
}
include $_SERVER['DOCUMENT_ROOT'] . "/demos-php/inc/body-corps-1b.php"; 
?>
