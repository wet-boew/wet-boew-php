<form action="#" method="post" role="search" class="form-inline">
<div class="form-group">
<label for="wb-srch-q"><?php echo $_SITE['wb_search_label_' . $_PAGE['lang1']]; ?></label>
<input id="wb-srch-q" class="form-control" name="wb-srch-q" type="search" value="" size="27" maxlength="150"/>
<input type="hidden" name="q" value="site:wet-boew.github.io OR site:github.com/wet-boew/"/>
</div>
<button type="submit" id="wb-srch-sub" class="btn btn-default" name="wb-srch-sub"><?php echo $_SITE['wb_search_' . $_PAGE['lang1']]; ?></button>
</form>