<?php
	$_COL_LAYOUT = "";
	$_NAV_LINK = "";
	//'left_menu_gauche' is all that's needed since you can only have one leftside per page
	//This is just incase the user used 'left_menu_gauche_eng' or 'left_menu_gauche_fra' to be 
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
?>
</head>

<body><div id="<?php echo $_COL_LAYOUT; ?>">
<?php 
//if this is a server page the skip navigation isn't required
if( $_PAGE['isserv'] != "1" && $_PAGE['issplash']!='1') {?>
<div id="wb-skip">
<ul id="wb-tphp">
<li id="wb-skip1"><a href="#wb-cont"><?php echo $_SKIP_1_NAV_TEXT ?></a></li>
<li id="wb-skip2"><a href="#wb-nav"><?php echo $_SKIP_2_NAV_TEXT ?></a></li>
</ul>
</div>
<?php } ?>

<div id="wb-head"><div id="wb-head-in"><header>
<?php
	$_PHP_THEME_PATH_ = $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] . $_SITE['wb_theme_folder'];
		
	//if this is a server page use the server navigation head
	$_THEME_HEAD_NAV_FILE =  $_PHP_THEME_PATH_ . "/cont/head-nav.php";
	if( $_PAGE['isserv'] == "1" ) {
		$_THEME_HEAD_NAV_FILE = $_PHP_THEME_PATH_ . "/serv/head-nav.php";
	} else if( $_PAGE['issplash'] == "1" ) {
		$_THEME_HEAD_NAV_FILE = $_PHP_THEME_PATH_ . "/sp-pe/head-nav.php";
	}
	
	if( file_exists($_THEME_HEAD_NAV_FILE) ) {
		include_once $_THEME_HEAD_NAV_FILE;
	}
?>

</header></div></div>
<div id="wb-core"><div id="wb-core-in" class="equalize">
<div id="wb-main" role="main"><div id="wb-main-in">
<!-- MainContentStart -->
<?php
	if( $_PAGE['signin'] == "1" || $_PAGE['signout'] == "1") {
		//one of the two buttons is going to be displayed
		//determine if it's the signin or signout button
		$_SIO_ = ($_PAGE['signin']=="1"?"signin":"signout");
		
		$_LINK_ = $_SITE['wb_'.$_SIO_.'_file_' . $_PAGE['lang1']];
		$_BUTTON_ = $_SITE['wb_'.$_SIO_.'_text_' . $_PAGE['lang1']];

		$_HEADING_ = $_SITE['wb_sio_heading_' . $_PAGE['lang1']];
		$_ACCOUNT_TEXT_ = $_SITE['wb_sio_text_' . $_PAGE['lang1']];
		$_ACCOUNT_FILE = $_SITE['wb_sio_file_' . $_PAGE['lang1']];

		echo '<div id="wb-session"><aside>' ."\n";
		echo '<h2 class="wb-invisible">'.$_HEADING_.'</h2>' ."\n";
		echo '<ul class="button-group">' ."\n";
		if( $_PAGE['signout'] == "1" ) {
			echo '<li class="settings"><a class="button" href="'.$_ACCOUNT_FILE.'">';
				echo $_ACCOUNT_TEXT_.'</a></li>';
		}
		echo '<li class="session">';
		echo '<a class="button" href="'.$_LINK_.'">';
			echo $_BUTTON_.'</a></li>' ."\n";
		echo '</ul>' ."\n";
		echo '</aside></div>' ."\n";
	}
	
if( $_SITE['PCOBanner'] == "1" ){
    $pageLang= $_SERVER['REQUEST_URI'];
        if (preg_match('/-en\./', $pageLang) > 0) {
            if ($_PAGE['left_menu_gauche'] <> ""){
                echo "<a href='".$_SITE['PCOBanner-en-link']."'><img width='880' height='240' src='".$_SITE['PCOBanner-WithLeftMenu-en']."' alt='".$_SITE['PCOBanner-en-alt']."' /></a>";
                }
            else{
            echo "<a href='".$_SITE['PCOBanner-en-link']."'><img width='1180' height='315' src='".$_SITE['PCOBanner-en']."' alt='".$_SITE['PCOBanner-en-alt']."' /></a>";
            }
        }
        else if (preg_match('/-fr\./', $pageLang) > 0) {
                if ($_PAGE['left_menu_gauche'] <> ""){
            echo "<a href='".$_SITE['PCOBanner-fr-link']."'><img width='880' height='240' src='".$_SITE['PCOBanner-WithLeftMenu-fr']."' alt='".$_SITE['PCOBanner-fr-alt']."' /></a>";}
            else{
                echo "<a href='".$_SITE['PCOBanner-fr-link']."'><img width='1180' height='315' src='".$_SITE['PCOBanner-fr']."' alt='".$_SITE['PCOBanner-fr-alt']."' /></a>";
                }
    }
}
?>
<h1 id="wb-cont"><?php
$_TITLE_ = $_PAGE['short_title_' . $_PAGE['lang1']];
//if there's more than one language set then add the additioal title elements
for( $i=2; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['short_title_' . $_PAGE['lang'.$i]]) ) {
		$_TITLE_ .= " / <span lang=\"".$_SITE['wb_meta_'.$_PAGE['lang'.$i]]."\">" . $_PAGE['short_title_' . $_PAGE['lang'.$i]] ."</span>"; 
	}
}

echo $_TITLE_;
?></h1>

<?php
	$_HEAD_END_ = $_SERVER['DOCUMENT_ROOT'] .$_SITE['wb_php_dist_folder'] .$_SITE['wb_theme_folder'] ."/head-end.php";
	if( file_exists($_HEAD_END_) ) {
		include_once $_HEAD_END_;
	}
	
	// Archived Section
	if( $_PAGE['isarchived'] == "1" ){
		echo "<p><img src='".$_SITE['wb_archive_warn_icon']."' alt='".$_SITE['wb_archive_warn_alt_'.$_PAGE['lang1']];
		echo "' title='".$_SITE['wb_archive_warn_alt_'.$_PAGE['lang1']]."' class='margin-bottom-none' />".$_SITE['wb_archive_warn_webuse_'.$_PAGE['lang1']];
		echo "</p><div id='archived' class='wet-boew-archived span-6' data-load='archived'>";
		echo "<section><h2>".$_SITE['wb_archive_warn_head_'.$_PAGE['lang1']]."</h2>";
		echo "<p>".$_SITE['wb_archive_warn_msg_'.$_PAGE['lang1']]."</p></section></div><div class='clear'></div>";
	}
?>
