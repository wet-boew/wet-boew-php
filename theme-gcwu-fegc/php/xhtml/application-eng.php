<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "eng";
$_PAGE['title_eng'] = "Application Template - GC Web Usability theme - XHTML 1.0 Strict - Web Experience Toolkit (WET)";
$_PAGE['issued'] = "2011-10-31";
$_PAGE['modified'] = "YYYY-MM-DD";
$_PAGE['version'] = "1.1b";
$_PAGE['html5'] = "0";
$_PAGE['isapp'] = "1"; ?>
<meta name="dcterms.description" content="English description / Description en anglais" />
<meta name="description" content="English description / Description en anglais" />
<meta name="keywords" content="English keywords / Mots-clés en anglais" />
<meta name="dcterms.creator" content="English name of the content author / Nom en anglais de l'auteur du contenu" />
<meta name="dcterms.subject" scheme="scheme" content="English subject terms / Termes de sujet en anglais" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/cont/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/cont/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>

<h2>Heading 2 (<code>h2</code>) default appearance</h2>
	<h3>Heading 3 (<code>h3</code>) default appearance</h3>
		<h4>Heading 4 (<code>h4</code>) default appearance</h4>
			<h5>Heading 5 (<code>h5</code>) default appearance</h5>
				<h6>Heading 6 (<code>h6</code>) default appearance</h6>
				<p>Paragraph  default appearance</p>

<p><a href="#">Link  default appearance</a></p>
<p><a href="mailto:"><code>mailto:</code> link default appearance</a></p>
<p><a href="http://www.">Third party <code>http://www.</code> link default appearance</a></p>
<p><a href=".doc">Link to file downloads based on file type <code>.doc</code>, <code>.psd</code>, <code>.zip</code>, <code>.pdf</code>, <code>.xls</code>, <code>.xlt</code>, <code>.rtf</code> and <code>.txt</code> default appearance</a></p>
<p>Abbreviation default appearance: <abbr title="Treasury Board">TBS</abbr>.</p>

<ul>
<li>unordered list (<code>ul</code>) first level default appearance
	<ul>
	<li>unordered list (<code>ul</code>) second level default appearance
		<ul>
		<li>unordered list (<code>ul</code>) third level default appearance</li>
		</ul>
	</li>
	</ul>
</li>
</ul>

<ol>
<li>ordered list (<code>ol</code>)  first level default appearance</li>
<li>ordered list (<code>ol</code>)   first level default appearance
	<ol>
	<li>ordered list (<code>ol</code>) second level default appearance</li>
	<li>ordered list (<code>ol</code>)  second level default appearance
		<ol>
		<li>ordered list (<code>ol</code>) third level default appearance</li>
		<li>ordered list (<code>ol</code>) third level default appearance</li>
		</ol>
	</li>
	</ol>
</li>
</ol>

<table>
<caption>Table caption default appearance</caption>
<thead>
<tr>
<th scope="col">Table header (<code>th</code>) default appearance</th>
<th scope="col">Table header (<code>th</code>) default appearance</th>
</tr>
</thead>
<tbody>
<tr>
<td>Table data (<code>td</code>)  default appearance</td>
<td>Table data (<code>td</code>) default appearance</td>
</tr>
</tbody>
</table>

<form action="#" method="post">
<p><label for="data1">Form input default appearance:</label> <input name="data1" type="text" id="data1" /></p>
<p><label for="data2">Form text area default appearance:</label> <textarea name="data2" cols="15" rows="3" id="data2"></textarea></p>
<p><label for="data4">Form select default appearance:</label> 
<select id="data4" name="data4">
<option value="Option 1">Option 1</option>
<option value="Option 2">Option 2</option>
<option value="Option 3">Option 3</option>
<option value="Option 4">Option 4</option>
</select></p>
<fieldset><legend>Form <code>legend</code>, <code>fieldset</code> and <code>checkbox</code> default appearance</legend>
<p><label for="data5">Option 1</label>&#160;<input name="checkbox" type="checkbox" id="data5" value="checkbox" />&#160;&#160;
<label for="data6">Option 2</label>&#160;<input name="checkbox" type="checkbox" id="data6" value="checkbox" />&#160;&#160;
<label for="data7">Option 3</label>&#160;<input name="checkbox" type="checkbox" id="data7" value="checkbox" />&#160;&#160;
<label for="data8">Option 4</label>&#160;<input name="checkbox" type="checkbox" id="data8" value="checkbox" /></p>
</fieldset>
<p><input name="submit" type="submit" id="submit" value="Submit default appearance" /> 
<input name="reset" type="reset" id="reset" value="Reset default appearance" /></p>
</form>

<blockquote>
<p>&quot;Blockquote default appearance&quot;.</p>
</blockquote>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/cont/trail-arr.php"; ?>
</body>
</html>