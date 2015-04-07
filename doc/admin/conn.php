<?php 
	$conn = @mysql_connect('localhost','root','192361') or die("连接数据库失败".mysql_error());

	mysql_select_db('votesystem') or die("选择数据库失败".mysql_error());

	mysql_set_charset('utf-8');

 ?>