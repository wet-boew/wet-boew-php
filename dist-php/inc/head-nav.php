<?php
if( $_PAGE['iserror'] != 1 ) {
	$_COL_LAYOUT = "";
	$_NAV_LINK = "";
	//'left_menu_gauche' is all that's needed since you can only have one leftside per page
	//This is just incase the user used 'left_menu_gauche_en' or 'left_menu_gauche_fr' to be 
	//consistent with naming in the rest of the varient.
	if( isset($_PAGE['left_menu_gauche_'.$_PAGE['lang1']]) && $_PAGE['left_menu_gauche_'.$_PAGE['lang1']]!="") {
		$_PAGE['left_menu_gauche'] = $_PAGE['left_menu_gauche_'.$_PAGE['lang1']];
	}
	$_PAGE['is_left_gauche'] = isset($_PAGE['left_menu_gauche']) && 
	$_PAGE['left_menu_gauche'] != "";
		
	// if no left side is uesed then use a single column layout
	// and skip to navigation points to the footer. 
	// Otherwise use a two column layout and skip to the left side menu
	if(  $_PAGE['is_left_gauche'] == "1" ) {
		$_COL_LAYOUT = "wb-body-sec";
		$_NAV_LINK = "wb_sh_link_2_";
	} else {
		$_COL_LAYOUT = "wb-body";
		$_NAV_LINK = "wb_sh_link_3_";
	}

	$_SKIP_1_NAV_TEXT = $_SITE['wb_sh_link_1_' . $_PAGE['lang1']];
	$_SKIP_2_NAV_TEXT = $_SITE[$_NAV_LINK . $_PAGE['lang1']];
}
?>
</head>
<body vocab="http://schema.org/" typeof="WebPage"<?php echo ' '.$_PAGE['bodytag']; ?>>
<?php 
//if this is a server page the skip navigation isn't required
if( $_PAGE['isserv'] != '1' && $_PAGE['issplash'] != '1' && $_PAGE['iserror'] != '1') {?>
<ul id="wb-tphp">
	<li class="wb-slc">
		<a class="wb-sl" href="#wb-cont"><?php echo $_SKIP_1_NAV_TEXT ?></a>
	</li>
	<li class="wb-slc visible-md visible-lg">
		<a class="wb-sl" href="#wb-info"><?php echo $_SKIP_2_NAV_TEXT ?></a>
	</li>
</ul>
<?php } ?>
<header role="banner" <?php echo ($_PAGE['iserror']==1?" class=\"container\"":"");?>>
<?php
//use the content head by default
$_ROOT_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'];
$_INC_TYPE_ = 'cont';

if( $_PAGE['issplash'] == '1' ) {
	$_INC_TYPE_ = 'sp-pe';
} else if( $_PAGE['iserror'] == '1' ) {
	$_INC_TYPE_ = 'err';
}

$_HEAD_INCLUDE_ = $_ROOT_PATH_ . "/inc/".$_INC_TYPE_."/head.php";

if( file_exists($_HEAD_INCLUDE_) ) {
	include_once $_HEAD_INCLUDE_;
}
?>

</header>
<?php
if (($_PAGE['iserror'] != '1') && isset($_PAGE['left_menu_gauche']) && $_PAGE['left_menu_gauche'] != '' && file_exists($_PAGE['left_menu_gauche'])) {
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<main role="main" property="mainContentOfPage" class="col-md-9 col-md-push-3">' .PHP_EOL;
} else {
    echo '<main role="main" property="mainContentOfPage" class="container">' .PHP_EOL;
}

if ($_PAGE['issplash'] != '1' && $_PAGE['iserror'] != '1') {
    echo '<h1 id="wb-cont" property="name">';
    if ($_PAGE['isarchived'] == "1") {
        $_TITLE_ = $_SITE['wb_archive_title_' . $_PAGE['lang1']] . $_PAGE['short_title_' . $_PAGE['lang1']];
        //if there's more than one language set then add the additioal title elements
        for ($i = 2; isset($_PAGE['lang' . $i]); $i++) {
            if (isset($_PAGE['short_title_' . $_PAGE['lang' . $i]])) {
                $_TITLE_ .= " / <span lang=\"" . $_SITE['wb_meta_' . $_PAGE['lang' . $i]] . "\">" . $_PAGE['short_title_' . $_PAGE['lang' . $i]] . "</span>";
            }
        }
    } else {
        $_TITLE_ = $_PAGE['short_title_' . $_PAGE['lang1']];
        //if there's more than one language set then add the additioal title elements
        for ($i = 2; isset($_PAGE['lang' . $i]); $i++) {
            if (isset($_PAGE['short_title_' . $_PAGE['lang' . $i]])) {
                $_TITLE_ .= " / <span lang=\"" . $_SITE['wb_meta_' . $_PAGE['lang' . $i]] . "\">" . $_PAGE['short_title_' . $_PAGE['lang' . $i]] . "</span>";
            }
        }
    }
    echo $_TITLE_;
    echo '</h1>';

    $_HEAD_END_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . "/head-end.php";
    if (file_exists($_HEAD_END_)) {
        include_once $_HEAD_END_;
    }

    // Archived Section
    if ($_PAGE['isarchived'] == "1") {
        echo "<div class=\"panel panel-danger\">";
        echo "<header class=\"panel-heading\">";
        echo "<h3 class=\"panel-title\">";
        echo "<span class=\"glyphicon glyphicon-warning-sign mrgn-rght-sm\" title=\"".$_SITE['wb_archive_panel_glyph_'.$_PAGE['lang1']]."\"> </span>";
        echo $_SITE['wb_archive_panel_title_'.$_PAGE['lang1']];
        echo "</h3>";
        echo "</header>";
        echo "<div class=\"panel-body\">";
        echo "<p>";
        echo $_SITE['wb_archive_warn_msg_'.$_PAGE['lang1']];
    	echo "</p>";
        echo "</div>";
        
        echo "</div>";
    }
} else if( $_PAGE['iserror'] == '1' ) {
	echo '<div class="row mrgn-tp-lg">' .PHP_EOL;
	
	if(isset($_PAGE['lang2']) ) {
		echo '<h1 class="wb-inv">';
		echo $_PAGE['short_title_'.$_PAGE['lang1']];
		echo '<span lang="'.$_PAGE['lang2'].'">';
		echo ' / ' .$_PAGE['short_title_'.$_PAGE['lang2']];
		echo '</span></h1>'.PHP_EOL;
		echo '<section class="col-md-6">'.PHP_EOL;
		echo "<h2><span class=\"glyphicon glyphicon-warning-sign mrgn-rght-md\"></span> " .$_PAGE['short_title_'.$_PAGE['lang1']] ."</h2>" .PHP_EOL;
		echo '<p>';
		echo $_PAGE['err_msg_'.$_PAGE['lang1']];
		echo '</p>'.PHP_EOL;
		
		if( $_PAGE['isserv'] != '1' ) {
			echo '<ul>' .PHP_EOL;
			echo '<li>'.$_STIE['wb_err_return_text_'.$_PAGE['lang1']]; //Return to the ';
			echo '<a href="'.$_SITE['wb_site_href_' . $_PAGE['lang1']] .'">';
			echo $_STIE['wb_err_return_link_'.$_PAGE['lang1']] .'</a></li>' .PHP_EOL; //'home page</a></li>' .PHP_EOL;
			echo '</ul>' .PHP_EOL;
		}
		echo '</section>' .PHP_EOL;

		echo '<section class="col-md-6" lang="'.$_PAGE['lang2'].'">'.PHP_EOL;
		echo "<h2><span class=\"glyphicon glyphicon-warning-sign mrgn-rght-md\"></span> " .$_PAGE['short_title_'.$_PAGE['lang2']] ."</h2>" .PHP_EOL;
		echo '<p>';
		echo $_PAGE['err_msg_'.$_PAGE['lang2']];
		echo '</p>'.PHP_EOL;
		
		if( $_PAGE['isserv'] != '1' ) {
			echo '<ul>' .PHP_EOL;
			echo '<li>'.$_STIE['wb_err_return_text_'.$_PAGE['lang2']];// Retournez à la ';
			echo '<a href="'.$_SITE['wb_site_href_' . $_PAGE['lang2']] .'">';
			echo $_STIE['wb_err_return_link_'.$_PAGE['lang2']] .'</a></li>' .PHP_EOL; //'page d\'accueil</a></li>' .PHP_EOL;
			echo '</ul>' .PHP_EOL;
		}
		echo '</section>' .PHP_EOL;
		
	} else {
		echo '<div class="col-md-12">' .PHP_EOL;
		echo '<h1><span class="glyphicon glyphicon-warning-sign mrgn-rght-md"></span> ';
		echo $_PAGE['short_title_'.$_PAGE['lang1']];
		echo '</h1>'.PHP_EOL.'<p>';
		echo $_PAGE['err_msg_'.$_PAGE['lang1']];
		echo '</p>'.PHP_EOL;
		if( $_PAGE['isserv'] != '1' ) {
			echo '<ul>' .PHP_EOL;
			echo '<li>'.$_STIE['wb_err_return_text_'.$_PAGE['lang1']]; //Return to the ';
			echo '<a href="'.$_SITE['wb_site_href_' . $_PAGE['lang1']] .'">';
			echo $_STIE['wb_err_return_link_'.$_PAGE['lang1']] .'</a></li>' .PHP_EOL; //'home page</a></li>' .PHP_EOL;
			echo '</ul>' .PHP_EOL;
		}
		echo '</div>' .PHP_EOL;
	}
	echo '</div>' .PHP_EOL;
}

?>