<?php
header("Link: <background.png>; rel=preload; as=image", false);
header("Link: <footer_left.png>; rel=preload; as=image", false);
header("Link: <footer_right.png>; rel=preload; as=image", false);
header("Link: <footer_mid.png>; rel=preload; as=image", false);
$links = array();
$links['About me'] = 'http://about.me/luanlmd';
$links['Git Hub'] = 'http://github.com/luanlmd';
$links['Blog'] = 'http://luanlmd.blogspot.com';
$links['Youtube'] = 'http://youtube.com/luanlmd';
$links['Sandbox'] = 'http://sb.luanlmd.com';
$links['Work'] = 'http://web.secom.to.gov.br';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Luan Almeida</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style>
			html { height: 100%; }
			body {
				background:
				<?php if (isset($_GET['spiderkull'])) { ?>
					url('spiderkull.gif') no-repeat top right,
				<?php } ?>
					url('background.png') no-repeat,
					url('footer_left.png') no-repeat bottom left,
					url('footer_right.png') no-repeat bottom right,
					url('footer_mid.png') repeat-x bottom left,
					#272822;
				padding-left: 23px; padding-top:17px; padding-top:17px; padding-left: 30px; }
			body { position:relative; overflow: hidden; }
			* { margin:none; border:none; font-size:12px; font-weight:normal; color:#F92664; line-height: 15px; }
			a { text-decoration:none; }
			a:hover { text-decoration:underline; }
			ul { list-style:none; }
			.doctype { color:#E1F8F2; }
			.html { color:#F92664; }
			.text { color:#E1F8F2; }
			.prop { color:#88DB2E; }
			.bracket { color:#E1F8F2; }
			.prop-value, .prop-value a { color:#E6DB74; }
		</style>
	</head>
	<body>
		<div>
			<code>
			<pre>
<span class="doctype">&lt;!DOCTYPE html&gt;</span>
&lt;html&gt;
	&lt;title&gt;<span class="text">Luan Almeida</span>&lt;/title&gt;
	&lt;description&gt;<span class="text">Web Developer, PHP + front-end</span>&lt;/description&gt;
	&lt;body&gt;
		&lt;nav&gt;
<?php foreach ($links as $k => $v) { ?>
			<span class="html">&lt;a</span> <span class="prop">href=</span><span class="prop-value">"<a href="<?php echo $v ?>"><?php echo $v ?></a>"</span><span class="html">&gt;</span><span class="text"><?php echo $k ?></span><span class="html">&lt;/a&gt;</span>
<?php } ?>
		&lt;/nav&gt;
	&lt;/body&gt;
&lt;/html&gt;
			</pre>
			</code>
		</div>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-683660-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
	</body>
</html>
