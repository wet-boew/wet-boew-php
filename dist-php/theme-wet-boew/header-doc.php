<?php 
//print the available title metadata for this page
for($i=1; isset($_PAGE['lang'.$i]); $i++ ) {
	if( isset($_PAGE['title_'.$_PAGE['lang'.$i]]) ) {
		$_CONTENT_LANG_ = $_PAGE['lang'.$i];
		$_CONTENT_TITLE_ =  $_PAGE['title_'.$_CONTENT_LANG_];
	
		//ISO spec should be updated in the future to depend on the
		//language that's chosen.
		$_ISO_ = "ISO639-2";
		if( $i > 1 ) {
			$_META_LANG_ = ' lang="'.$_SITE['wb_meta_'.$_CONTENT_LANG_].'"';
		}
	
		echo '<meta name="dcterms.title"'.$_META_LANG_.' title="'.$_ISO_.'" content="'.$_CONTENT_TITLE_.'" />'."\n";
		echo '<meta name="dcterms.language"'.$_META_LANG_.' title="'.$_ISO_.'" content="'.$_CONTENT_LANG_.'" />' ."\n";
	}
}
?>
<?php if( $_PAGE['isserv'] != "1" ) { ?>
<meta name="dcterms.issued" title="W3CDTF" content="<?php echo $_PAGE['issued']; ?>" />
<meta name="dcterms.modified" title="W3CDTF" content="<?php echo $_PAGE['modified']; ?>" />
<?php } ?>