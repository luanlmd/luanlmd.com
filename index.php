<?php
$links = array();
$links['About me'] = 'http://about.me/luanlmd';
$links['Git Hub'] = 'http://github.com/luanlmd';
$links['Blog'] = 'http://luanlmd.wordpress.com';
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
	&lt;title&gt;Luan Almeida&lt;/title&gt;
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
	</body>
</html>
