<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Web Experience Toolkit (WET) / Boîte à outils de l'expérience Web (BOEW)
www.tbs.gc.ca/ws-nw/wet-boew/terms / www.sct.gc.ca/ws-nw/wet-boew/conditions -->
<?php $_PAGE['lang1'] = "fra";
$_PAGE['title_fra'] = "Gabarit pour applications - Thème de la facilité d'emploi Web GC - XHTML 1.0 Strict - Boîte à outils de l'expérience Web (BOEW)";
$_PAGE['issued'] = "2011-10-31";
$_PAGE['modified'] = "AAAA-MM-JJ";
$_PAGE['version'] = "1.1b";
$_PAGE['html5'] = "0";
$_PAGE['isapp'] = "1";
$_PAGE['nosearch'] = "1"; ?>
<meta name="dcterms.description" content="French description / Description en français" />
<meta name="description" content="French description / Description en français" />
<meta name="keywords" content="French keywords / Mots-clés en français" />
<meta name="dcterms.creator" content="French name of the content author / Nom en français de l'auteur du contenu" />
<meta name="dcterms.subject" scheme="scheme" content="French subject terms / Termes de sujet en français" />
<?php include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/cont/css.php"; ?>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/1col.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/cont/header-entete.php";
include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-1.php"; ?>

<h2>En-tête 2 (<code>h2</code>) - apparence par défaut</h2>
	<h3>En-tête 3 (<code>h3</code>) - apparence par défaut</h3>
		<h4>En-tête 4 (<code>h4</code>) - apparence par défaut</h4>
			<h5>En-tête 5 (<code>h5</code>) - apparence par défaut</h5>
				<h6>En-tête 6 (<code>h6</code>) - apparence par défaut</h6>
				<p>Paragraphe - apparence par défaut</p>

<p><a href="#">Lien - apparence par défaut</a></p>
<p><a href="mailto:"><code>mailto:</code> lien - apparence par défaut</a></p>
<p><a href="http://www.">Tiers <code>http://www.</code> lien - apparence par défaut</a></p>
<p><a href=".doc">Lien aux téléchargements des fichiers fondés sur le type de fichier <code>.doc</code>, <code>.psd</code>, <code>.zip</code>, <code>.pdf</code>, <code>.xls</code>, <code>.xlt</code>, <code>.rtf</code> et <code>.txt</code> - apparence par défaut</a></p>
<p>Abréviation - apparence par défaut: <abbr title="Secrétarit du Conseil de Trésor">SCT</abbr>.</p>

<ul>
<li>liste à puces (<code>ul</code>) premier niveau - apparence par défaut
	<ul>
	<li>liste à puces (<code>ul</code>) deuxième niveau - apparence par défaut
		<ul>
		<li>liste à puces (<code>ul</code>) troisième niveau - apparence par défaut</li>
		</ul>
	</li>
	</ul>
</li>
</ul>

<ol>
<li>liste ordonnée (<code>ol</code>)  premier niveau - apparence par défaut</li>
<li>liste ordonnée (<code>ol</code>)   premier niveau - apparence par défaut
	<ol>
	<li>liste ordonnée (<code>ol</code>) deuxième niveau - apparence par défaut</li>
	<li>liste ordonnée (<code>ol</code>)  deuxième niveau - apparence par défaut
		<ol>
		<li>liste ordonnée (<code>ol</code>) troisième niveau - apparence par défaut</li>
		<li>liste ordonnée (<code>ol</code>) troisième niveau - apparence par défaut</li>
		</ol>
	</li>
	</ol>
</li>
</ol>

<table>
<caption>Légende de table  - apparence par défaut</caption>
<thead>
<tr>
<th scope="col">En-tête de table (<code>th</code>) - apparence par défaut</th>
<th scope="col">En-tête de table (<code>th</code>) - apparence par défaut</th>
</tr>
</thead>
<tbody>
<tr>
<td>Données de table (<code>td</code>) - apparence par défaut</td>
<td>Données de table (<code>td</code>) - apparence par défaut</td>
</tr>
</tbody>
</table>

<form action="#" method="post">
<p><label for="data1">Formulaire - Entrée - apparence par défaut&#160;:</label> <input name="data1" type="text" id="data1" /></p>
<p><label for="data2">Formulaire - Zone texte - apparence par défaut&#160;:</label> <textarea name="data2" cols="15" rows="3" id="data2"></textarea></p>
<p><label for="data4">Formulaire - Sélection - apparence par défaut&#160;:</label> 
<select id="data4" name="data4">
<option value="Option 1">Option 1</option>
<option value="Option 2">Option 2</option>
<option value="Option 3">Option 3</option>
<option value="Option 4">Option 4</option>
</select></p>
<fieldset><legend>Formulaire - <code lang="en">legend</code>, <code lang="en">fieldset</code> et case à cocher - apparence par défaut</legend>
<p><label for="data5">Option 1</label>&#160;<input name="checkbox" type="checkbox" id="data5" value="checkbox" />&#160;&#160;
<label for="data6">Option 2</label>&#160;<input name="checkbox" type="checkbox" id="data6" value="checkbox" />&#160;&#160;
<label for="data7">Option 3</label>&#160;<input name="checkbox" type="checkbox" id="data7" value="checkbox" />&#160;&#160;
<label for="data8">Option 4</label>&#160;<input name="checkbox" type="checkbox" id="data8" value="checkbox" /></p>
</fieldset>
<p><input name="submit" type="submit" id="submit" value="Soumettre - apparence par défaut" /> 
<input name="reset" type="reset" id="reset" value="Réinitialiser - apparence par défaut" /></p>
</form>

<blockquote>
<p>&quot;Blockquote - apparence par défaut&quot;.</p>
</blockquote>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/centre-2.php";
include $_SERVER['DOCUMENT_ROOT'] . "/theme-gcwu-fegc/inc/cont/trail-arr.php"; ?>
</body>
</html>