<?php

$_SIG_IMG_ = $_SITE['gcwu_sig_image_'.$_PAGE['lang1']];
$_SIG_ALT_ = $_SITE['gcwu_sig_' . $_PAGE['lang1']];

$_WMMS_IMG_ = $_SITE['gcwu_wmms_image_'.$_PAGE['lang1']];
$_WMMS_ALT_ = $_SITE['gcwu_wmms_' . $_PAGE['lang1'] ];
?>

<div class="container">
	<div class="row">
		<object id="gcwu-sig" type="image/svg+xml" tabindex="-1" role="img" data="<?php echo $_SIG_IMG_; ?>" aria-label="<?php echo $_SIG_ALT_; ?>"></object>
		<ul id="gc-bar" class="list-inline">
			<li><a href="<?php echo $_SITE['gcwu_head_canada_dot_ca_link_'.$_PAGE['lang1']]; ?>" rel="external"><?php echo $_SITE['gcwu_head_canada_dot_ca_'.$_PAGE['lang1']]; ?></a></li>
			<li><a href="<?php echo $_SITE['gcwu_head_service_link_'.$_PAGE['lang1']]; ?>" rel="external"><?php echo $_SITE['gcwu_head_service_'.$_PAGE['lang1']]; ?></a></li>
			<li><a href="<?php echo $_SITE['gcwu_head_departments_link_'.$_PAGE['lang1']]; ?>" rel="external"><?php echo $_SITE['gcwu_head_departments_'.$_PAGE['lang1']]; ?></a></li>
			
			<li id="wb-lng">
				<h2><?php echo $_SITE['wb_lang_header_'.$_PAGE['lang1']]; ?></h2>
			<ul class="list-inline">
			 <?php
                if( $_PAGE['nolang'] != "1" ) {
                    $q= substr($_SERVER['REQUEST_URI'], 0, strpos($_SERVER['REQUEST_URI'], $_PAGE['lang1']."."));
                    $langString = "";
                    for($i=2; isset($_PAGE['lang'.$i]); $i++ ) {
                        $listItem = '<li>';
                        $listItem .= '<a lang="' .$_SITE['wb_meta_' . $_PAGE['lang'.$i]];
                        $listItem .= '" href="' .$q . $_PAGE['lang'.$i].'.php';
                        if ($_SERVER['QUERY_STRING'] != ""){
                        	$listItem .= '?'.$_SERVER['QUERY_STRING'];
                        }
                        $listItem .= '">' . $_SITE['wb_lang_text_' . $_PAGE['lang'.$i]];
                        $listItem .= "</a>";

                        $listItem .= '</li>' . "\n";

                        $langString = $listItem . $langString;
                    }
                    echo $langString;
	            }
                ?></ul>
			</li>
			
		</ul>
		<section class="wb-mb-links col-xs-12 visible-sm visible-xs" id="wb-glb-mn">
			<h2><?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?></h2>
			<ul class="pnl-btn list-inline text-right">
			<li><a href="#mb-pnl" title="<?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?>" aria-controls="mb-pnl" class="overlay-lnk" role="button"><span class="glyphicon glyphicon-th-list"><span class="wb-inv"><?php echo $_SITE['wb_mb_menu_'.$_PAGE['lang1']]; ?></span></span></a></li>
			</ul>
			<div id="mb-pnl"></div>
		</section>
	</div>
</div>
</div>
<div class="container">
	<div class="row">
		<div id="wb-sttl" class="col-md-5">
			<a href="<?php echo $_SITE['wb_site_href_' . $_PAGE['lang1']]; ?>">
			<span><?php echo $_SITE['wb_site_title_'.$_PAGE['lang1']] ?></span>
			</a>
		</div>
			<object id="wmms" type="image/svg+xml" tabindex="-1" role="img" data="<?php  echo $_WMMS_IMG_; ?>" aria-label="<?php echo $_WMMS_ALT_; ?>"></object>
		<?php
		if( $_PAGE['nosearch'] != "1" ) {
			echo '<section id="wb-srch" class="visible-md visible-lg">';
			echo '<h2>'.$_SITE['wb_search_' . $_PAGE['lang1']].'</h2>';
		    include $_SERVER['DOCUMENT_ROOT'] . $_SITE['wb_php_dist_folder'] ."/inc/search.php";
			echo '</section>';
		}
		?>
	</div>

