<div id="cn-skip-head">
	<ul id="cn-tphp">
		<li id="cn-sh-link-1"><a href="#cn-cont"><?php echo $_TEMPLATE['sh_link_1_' . $_PAGE['lang1']]; if ($_PAGE['lang2'] != '') { ?> / <span lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['sh_link_1_' . $_PAGE['lang2']]; ?></span><?php } ?></a></li>
		<li id="cn-sh-link-2"><?php if ($_UNKNOWN['is_left_gauche'] == 1 || $_UNKNOWN['is_right_droite'] == 1) { ?><a href="#cn-nav"><?php echo $_TEMPLATE['sh_link_2_' . $_PAGE['lang1']]; if ($_PAGE['lang2'] != '') { ?> / <span lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['sh_link_2_' . $_PAGE['lang2']]; ?></span><?php } ?></a><?php } else { ?><a href="#cn-nav"><?php echo $_TEMPLATE['sh_link_3_' . $_PAGE['lang1']]; if ($_PAGE['lang2'] != '') { ?> / <span lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php if ($_PAGE['html5'] == '0') { ?> xml:lang="<?php echo $_TEMPLATE['meta_' . $_PAGE['lang2']]; ?>"<?php } ?>><?php echo $_TEMPLATE['sh_link_3_' . $_PAGE['lang2']]; ?></span><?php } ?></a><?php } ?></li>
	</ul>
</div>

<div id="cn-head"><div id="cn-head-inner"><?php if ($_PAGE['html5'] == '1') { ?><header><?php } ?>
<!-- HeaderStart -->