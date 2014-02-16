<?php
	/*
	 * uncomment for AJAX replacement test
	 */
?>
<!-- TODO: Add php variable for data-ajax-fetch file -->
<nav role="navigation" id="wb-sm" data-ajax-fetch="<?php echo $_SITE['wb_core_dist_folder']?>/ajax/sitemenu-en.html" data-trgt="mb-pnl" class="wb-menu visible-md visible-lg" typeof="SiteNavigationElement">
<div class="container nvbar"><h2><?php echo $_SITE['wb_sitenav_' . $_PAGE["lang1"]]; ?></h2>
<div class="row">
	<ul class="list-inline menu">
		<li><a href="/wet-boew/index-en.html">WET project</a></li>
		<li><a href="https://github.com/wet-boew/wet-boew/wiki/Implementing-WET">Implement WET</a></li>
		<li><a href="https://github.com/wet-boew/wet-boew/wiki/Contributor-guidelines">Contribute to WET</a></li>
	</ul>
</div>
</div>
</nav>

<?php
/*
 * Comment out for AJax replacement test
 *

<ul class="mb-menu">
<li><section><h3><a href="http://wet-boew.github.io/wet-boew/index-en.html">WET project</a></h3><div class="mb-sm">
<div class="span-2">
<ul>
<li><a href="https://github.com/wet-boew/wet-boew/">Main project page</a></li>
<li><a href="http://wet-boew.github.io/wet-boew/License-en.html">Terms and conditions</a></li>
<li><a href="http://wet-boew.github.io/wet-boew/demos/index-en.html">Working examples</a></li>
</ul>
</div>
<div class="clear"></div>
<div class="mb-main-link"><a href="http://wet-boew.github.io/wet-boew/index-en.html">WET project - Main page</a></div>
</div></section></li>
<li><section><h3><a href="section2/index-en.html">Section 2</a></h3><div class="mb-sm">
<div class="span-2">
<section><h4><a href="#">Section 2.1</a></h4>
<ul>
<li><a href="#">Item 2.1.1</a></li>
<li><a href="#">Item 2.1.2</a></li>
<li><a href="#">Item 2.1.3</a></li>
<li><a href="#">Item 2.1.4</a></li>
<li><a href="#">Item 2.1.5</a></li>
<li><a href="#">Item 2.1.6</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="section2/section22/index-en.html">Section 2.2</a></h4>
<ul>
<li><a href="#">Item 2.2.1</a></li>
<li><a href="#">Item 2.2.2</a>
	<ul>
	<li><a href="#">Item 2.2.2.1</a></li>
	<li><a href="#">Item 2.2.2.2</a></li>
	<li><a href="#">Item 2.2.2.3</a></li>
	</ul>
</li>
<li><a href="#">Item 2.2.3</a></li>
<li><a href="#">Item 2.2.4</a></li>
<li><a href="#">Item 2.2.5</a></li>
<li><a href="#">Item 2.2.6</a></li>
<li><a href="#">Item 2.2.7</a></li>
<li><a href="#">Item 2.2.8</a></li>
</ul>
</section>
</div>
<div class="clear"></div>
<div class="mb-main-link"><a href="section2/index-en.html">Section 2 - Main page</a></div>
</div></section></li>
<li><section><h3><a href="#">Section 3</a></h3><div class="mb-sm">
<div class="mb-highlight">
<section><h4><a href="#">Focus</a></h4>
<ul>
<li><a href="#">Link 1</a></li>
<li><a href="#">Link 2</a></li>
<li><a href="#">Link 3</a></li>
<li><a href="#">Link 4</a></li>
<li><a href="#">Link 5</a></li>
<li><a href="#">Link 6</a></li>
<li><a href="#">Link 7</a></li>
</ul>
<div class="clear"></div>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 3.1</a></h4>
<ul>
<li><a href="#">Item 3.1.1</a></li>
<li><a href="#">Item 3.1.2</a></li>
<li><a href="#">Item 3.1.3</a></li>
<li><a href="#">Item 3.1.4</a></li>
<li><a href="#">Item 3.1.5</a></li>
<li><a href="#">Item 3.1.6</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 3.2</a></h4>
<ul>
<li><a href="#">Item 3.2.1</a></li>
<li><a href="#">Item 3.2.2</a></li>
<li><a href="#">Item 3.2.3</a></li>
<li><a href="#">Item 3.2.4</a></li>
<li><a href="#">Item 3.2.5</a></li>
<li><a href="#">Item 3.2.6</a></li>
<li><a href="#">Item 3.2.7</a></li>
<li><a href="#">Item 3.2.8</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 3.3</a></h4>
<ul>
<li><a href="#">Item 3.3.1</a></li>
<li><a href="#">Item 3.3.2</a></li>
<li><a href="#">Item 3.3.3</a></li>
</ul>
</section>
</div>
<div class="clear"></div>
<div class="mb-main-link"><a href="#">Section 3 - Main page</a></div>
</div></section></li>
<li><section><h3><a href="section4/index-en.html">Section 4</a></h3><div class="mb-sm">
<div class="span-2">
<section><h4><a href="#">Section 4.1</a></h4>
<ul>
<li><a href="#">Item 4.1.1</a></li>
<li><a href="#">Item 4.1.2</a></li>
<li><a href="#">Item 4.1.3</a></li>
</ul>
</section>
<section><h4><a href="#">Section 4.2</a></h4>
<ul>
<li><a href="#">Item 4.2.1</a></li>
<li><a href="#">Item 4.2.2</a></li>
<li><a href="#">Item 4.2.3</a></li>
<li><a href="#">Item 4.2.4</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="section4/section43/index-en.html">Section 4.3</a></h4>
<ul>
<li><a href="#">Item 4.3.1</a></li>
<li><a href="#">Item 4.3.2</a></li>
<li><a href="#">Item 4.3.3</a></li>
<li><a href="#">Item 4.3.4</a></li>
</ul>
</section>
<section><h4><a href="#">Section 4.4</a></h4>
<ul>
<li><a href="#">Item 4.4.1</a></li>
<li><a href="#">Item 4.4.2</a></li>
<li><a href="#">Item 4.4.3</a></li>
</ul>
</section>
</div>
<div class="clear"></div>
<div class="mb-main-link"><a href="#">Section 4 - Main page</a></div>
</div></section></li>
<li><div><a href="#">Section 5</a></div></li>
<li><section><h3><a href="#">Section 6</a></h3><div class="mb-sm">
<div class="mb-highlight">
<section><h4><a href="#">Focus</a></h4>
<ul>
<li><a href="#">Link 1</a></li>
<li><a href="#">Link 2</a></li>
<li><a href="#">Link 3</a></li>
<li><a href="#">Link 4</a></li>
<li><a href="#">Link 5</a></li>
<li><a href="#">Link 6</a></li>
<li><a href="#">Link 7</a></li>
</ul>
<div class="clear"></div>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 6.1</a></h4>
<ul>
<li><a href="#">Item 6.1.1</a></li>
<li><a href="#">Item 6.1.2</a></li>
<li><a href="#">Item 6.1.3</a></li>
<li><a href="#">Item 6.1.4</a></li>
<li><a href="#">Item 6.1.5</a></li>
<li><a href="#">Item 6.1.6</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 6.2</a></h4>
<ul>
<li><a href="#">Item 6.2.1</a></li>
<li><a href="#">Item 6.2.2</a></li>
<li><a href="#">Item 6.2.3</a></li>
<li><a href="#">Item 6.2.4</a></li>
<li><a href="#">Item 6.2.5</a></li>
<li><a href="#">Item 6.2.6</a></li>
<li><a href="#">Item 6.2.7</a></li>
<li><a href="#">Item 6.2.8</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 6.3</a></h4>
<ul>
<li><a href="#">Item 6.3.1</a></li>
<li><a href="#">Item 6.3.2</a></li>
<li><a href="#">Item 6.3.3</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 6.4</a></h4>
<ul>
<li><a href="#">Item 6.4.1</a></li>
<li><a href="#">Item 6.4.2</a></li>
<li><a href="#">Item 6.4.3</a></li>
<li><a href="#">Item 6.4.4</a></li>
<li><a href="#">Item 6.4.5</a></li>
<li><a href="#">Item 6.4.6</a></li>
</ul>
</section>
</div>
<div class="clear"></div>
<div class="mb-main-link"><a href="#">Section 6 - Main page</a></div>
</div></section></li>
<li><section><h3><a href="#">Section 7</a></h3><div class="mb-sm">
<div class="span-2">
<section><h4><a href="#">Section 7.1</a></h4>
<ul>
<li><a href="#">Item 7.1.1</a></li>
<li><a href="#">Item 7.1.2</a></li>
<li><a href="#">Item 7.1.3</a></li>
<li><a href="#">Item 7.1.4</a></li>
<li><a href="#">Item 7.1.5</a></li>
<li><a href="#">Item 7.1.6</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 7.2</a></h4>
<ul>
<li><a href="#">Item 7.2.1</a></li>
<li><a href="#">Item 7.2.2</a></li>
<li><a href="#">Item 7.2.3</a></li>
<li><a href="#">Item 7.2.4</a></li>
<li><a href="#">Item 7.2.5</a></li>
<li><a href="#">Item 7.2.6</a></li>
<li><a href="#">Item 7.2.7</a></li>
<li><a href="#">Item 7.2.8</a></li>
</ul>
</section>
</div>
<div class="span-2">
<section><h4><a href="#">Section 7.3</a></h4>
<ul>
<li><a href="#">Item 7.3.1</a></li>
<li><a href="#">Item 7.3.2</a></li>
<li><a href="#">Item 7.3.3</a></li>
</ul>
</section>
</div>
<div class="clear"></div>
<div class="mb-main-link"><a href="#">Section 7 - Main page</a></div>
</div></section></li>
</ul>
*/
?>
