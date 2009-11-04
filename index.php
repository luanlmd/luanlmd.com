<?
function blog()
{
	$xml = new SimpleXMLElement(file_get_contents("/tmp/luanlmd.blog.xml"));
	return $xml->channel->item;
}
function reader()
{
	$xml = new SimpleXMLElement(file_get_contents("/tmp/luanlmd.greader.xml"));
	return $xml->entry;
}
function twitter()
{
}
?>
<!DOCTYPE html> 
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
		<title>Luan Almeida</title> 
		<link rel="stylesheet" href="screen.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
		<script src="scripts.js" type="text/javascript"></script>
		<link rel="alternate" type="application/rss+xml" title="Luan Almeida (Blog)" href="http://luanlmd.wordpress.com/feed/" /> 
	</head>
	<body>
		<div id="wrapper">
		
			<header id="top">
				<h1>Luan Almeida</h1>
				<!--p></p-->
			</header>
			<section id="blog">
			<a href="http://luanlmd.wordpress.com/"><h1>Blog</h1></a>
<? foreach (blog() as $i) { ?>
				<article>
					<a href="<?= $i->link ?>"><h2><?= $i->title ?></h2></a>
					<p><?= $i->description ?></p>
				</article>
<? } ?>
			</section>
			<section id="contact">
				<h2>Contato</h2>
				<form method="post" action="email.php">
					<p>
						<label>
							Nome:
							<input name="name" />
						</label>
					</p>
					<p>
						<label>
							E-mail:
							<input name="email" />
						</label>
					</p>
					<p>
						<label>
							Mensagem:
							<textarea name="body"></textarea>
						</label>
					</p>
					<input type="button" value="Enviar" />
				</form>
			</section>
			<section id="links">
				<h2>Links</h2>
				<ul>
					<li><a href="http://luanlmd.wordpress.com">Blog</a></li>
					<li><a href="http://twitter.com/luanlmd">Twitter</a></li>
					<li><a href="http://migre.me/80zh">Curriculo</a></li>
				</ul>
			</section>
			<section id="twitter">
				<a href="http://twitter.com/luanlmd"><h2>Twitter</h2></a>
				<ul>
<?
$ts = json_decode(file_get_contents("/tmp/luanlmd.twitter.json"));
for($x = 0; $x < 14; $x++)
{                       
        $t = htmlspecialchars($ts[$x]->text);
        if($t{0} != "@") {      
        $t = ereg_replace("(http:\/\/[^ ]+)", "<a rel=\"nofollow\" href=\"\\1\">\\1</a>", $t);
        $t = ereg_replace("@([a-zA-Z0-9_]+)", "<a rel=\"nofollow\" href=\"http://twitter.com/\\1\">@\\1</a>", $t);
        $t = ereg_replace(" #([^ ]+)", "<a rel=\"nofollow\" href=\"http://search.twitter.com/search?q=%23\\1\">#\\1</a>", $t);
?>                                      
					<li><?= $t ?></li>
<? } } ?>
				</ul>
			</section>

			<section id="shared">
				<a href="http://www.google.com/reader/shared/luanlmd"><h2>Feeds Compartilhados</h2></a>
				<ul>
<? $x = 0; foreach (reader() as $i) { $attr = $i->link->attributes(); $x++; if ($x < 15) { ?>
					<li>
						<a href="<?= $attr["href"] ?>"><?= $i->title ?></a>
					</li>
<? } } ?>
				</ul>
			</section>
			<footer>
				
			</footer>
		</div>
<?php if ($_SERVER["HOST_NAME"] == "luanlmd.com") { ?>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-683660-9");
			pageTracker._trackPageview();
			} catch(err) {}
		</script>
<?php } ?>
	</body>
</html>
