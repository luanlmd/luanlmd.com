<?php
session_start();
$chars = "abcdefghijklmnopqsrtuvwxyz0123456789";
$str = "";
for ($i = 0; $i < 10; $i++)
{
	$str .=$chars{rand(0,strlen($chars))};
}
$_SESSION["antispam"] = $str;
echo $str;
