<?php
$links = array();
$links['About me'] = 'http://about.me/luanlmd';
$links['Git Hub'] = 'http://github.com/luanlmd';
$links['Blog'] = 'http://blog.luanlmd.com';
$links['Sandbox'] = 'http://sb.luanlmd.com';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Luan Almeida</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<style>
			* { margin:none; border:none; font-size:14px; font-weight:bold; color:#729FCF; }
			a { text-decoration:none; }
			a:hover { text-decoration:underline; }
			ul { list-style:none; }
			body { background:#2E3436; }
			.doctype { color:#987FA0; }
			.html { color:#729FCF; }
			.text { color:#D3D6C4; }
			.prop { color:#79E234; }
			.prop-value, .prop-value a { color:#EDCE0A; }
		</style>
	</head>
	<body>
		<div>
			<code>
			<pre>
<span class="doctype">&lt;!DOCTYPE html&gt;</span>
&lt;html&gt;
	&lt;title&gt;<span class="text">Luan Almeida</span>&lt;/title&gt;
	&lt;body&gt;
		&lt;ul&gt;
</pre>
		<ul>
<?php foreach ($links as $k => $v) { ?>
			<li>
<pre>
		<span class="html">&lt;li&gt;&lt;a</span> <span class="prop">href=</spam><span class="prop-value">"<a href="<?php echo $v ?>"><?php echo $v ?></a>"</span><span class="html">&gt;</span><span class="text"><?php echo $k ?></span><span class="html">&lt;/a&gt;&lt;/li&gt;</span>
</pre>
			</li>

<?php } ?>
		</ul>
<pre>
		&lt;/ul&gt;
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
