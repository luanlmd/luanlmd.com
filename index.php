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
	$ts = json_decode(file_get_contents("/tmp/luanlmd.twitter.json"));
	return $ts;
}
function github()
{
	$xml = new SimpleXMLElement(file_get_contents("/tmp/luanlmd.github.xml"));
	return $xml->entry;
}
?>
<!DOCTYPE html> 
<html> 
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Luan Almeida</title> 
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="Luan Almeida (Blog)" href="http://luanlmd.wordpress.com/feed/" /> 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>
		<script src="js/scripts.js" type="text/javascript"></script>
	</head>
	<body>
		<script src="http://imasters.uol.com.br/crossbrowser/fonte.js" type="text/javascript"></script>
		<header id="top">
			<div class="container_24">
				<h1 class="grid_24 push_1">Luan Almeida</h1>
				<section id="links">
					<ul>
						<li><a href="http://luanlmd.wordpress.com">Blog</a></li>
						<li><a href="http://twitter.com/luanlmd">Twitter</a></li>
						<li><a href="http://github.com/luanlmd">GitHub</a></li>
						<li><a href="http://sb.luanlmd.com">Sandbox</a></li>
					</ul>
				</section>
			</div>
		</header>
		<div class="container_24">
			<section id="blog" class="grid_15">
				<ul>
<? foreach (blog() as $i) { ?>
					<li>
						<a href="<?= $i->link ?>">
						<h2><?= $i->title ?></h2>
						<p><?= $i->description ?></p>
						</a>
					</li>
<? } ?>
				</ul>
			</section>
			<div class="container_9">
				<section id="contact" class="grid_9">
				
					<h2>Email-me</h2>
					<form method="post" action="email.php">
						<p>
							<label>
								<input name="name" title="Seu nome" placeholder="nome" />
							</label>
						</p>
						<p>
							<label>
								<input name="email" title="Seu e-mail" placeholder="e-mail" />
							</label>
						</p>
						<p>
							<label>
								<textarea name="body" rows="5" title="Digite aqui sua mensagem para mim"  placeholder="mensagem"></textarea>
							</label>
						</p>
						<input type="button" value="Enviar" />
					</form>
				
				</section>
				<section id="twitter" class="grid_9">
					<div class="wrap">
						<a href="http://twitter.com/luanlmd"><h2>Twitter</h2></a>
						<ul>
<?
$ts = twitter();
for($x = 0; $x < 5; $x++)
{                       
        $t = htmlspecialchars($ts[$x]->text);
        if($t{0} != "@") {      
        $t = ereg_replace("(http:\/\/[^ ]+)", " <a rel=\"nofollow\" href=\"\\1\">\\1</a> ", $t);
        $t = ereg_replace("@([a-zA-Z0-9_]+)", " <a rel=\"nofollow\" href=\"http://twitter.com/\\1\">@\\1</a> ", $t);
        $t = ereg_replace(" #([^ ]+)", " <a rel=\"nofollow\" href=\"http://search.twitter.com/search?q=%23\\1\">#\\1</a> ", $t);
?>                                      
					<li>
						<p><?= $t ?></p>
					</li>
<? } } ?>
						</ul>
					</div>
				</section>
				<section id="github" class="grid_9">
					<div class="wrap">
						<a href="http://github.com/luanlmd"><h2>GitHub</h2></a>
						<ul>
<? $x = 0; foreach (github() as $i) { $attr = $i->link->attributes(); $x++; if ($x < 5) { ?>
						<li>
							<a href="<?= $attr["href"] ?>"><?= $i->title ?></a>
							<div>
								<?= $i->content ?>
							</div>
						</li>
<? } } ?>
					</ul>
				</div>
			</section>
			</div>
		</div>
		<section id="shared">
			<div class="container_24">
					<a href="http://www.google.com/reader/shared/luanlmd"><h2>Feeds Compartilhados</h2></a>
					<ul>
<? $x = 0; foreach (reader() as $i) { $attr = $i->link->attributes(); $x++; if ($x < 15) { ?>
						<li>
							<a href="<?= $attr["href"] ?>"><?= $i->title ?></a>
						</li>
	<? } } ?>
					</ul>
			</div>
		</section>
		<footer class="container_24">
			<p>Site melhor visualizado em navegadores modernos. Favor não utilizar IEca.</p>
			<p>Código disponível em: <a href="http://github.com/luanlmd/luanlmd.com">http://github.com/luanlmd/luanlmd.com</a></p>
		</footer>
<?php if ($_SERVER["HTTP_HOST"] == "luanlmd.com") { ?>
		<script>
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-683660-9");
			pageTracker._trackPageview();
			} catch(err) {}
		</script>

		<script>
			var vglnk_api_key = "ede440244a807302329b32d9ba9492ad";
			var vglnk_domain = (("https:" == document.location.protocol) ? "https://" : "http://") + "api.viglink.com";
			document.write(unescape("%3Cscript src='" + vglnk_domain + "/api/vglnk.js?key=" + vglnk_api_key +
		    "' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
				vglnk(vglnk_domain, vglnk_api_key);
			} catch(err) {}
		</script>
<?php } ?>
	</body>
</html>
