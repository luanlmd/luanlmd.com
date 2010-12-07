<?
if ($blah = file_get_contents('http://luanlmd.wordpress.com/feed')) { file_put_contents('/tmp/luanlmd.blog.xml',$blah); }
if ($blah = file_get_contents('http://www.google.com/reader/public/atom/user/02896358711252002187/state/com.google/broadcast')) { file_put_contents('/tmp/luanlmd.greader.xml',$blah); }
if ($blah = file_get_contents('http://github.com/luanlmd.atom')) { file_put_contents('/tmp/luanlmd.github.xml',$blah); }
?>
Done.
