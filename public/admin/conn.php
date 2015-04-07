<?php 
	$conn = @mysql_connect('localhost','votesystem','pmXrbBj7yur4Ac4V') or die("连接数据库失败".mysql_error());

	mysql_select_db('votesystem') or die("选择数据库失败".mysql_error());

	mysql_set_charset('utf-8');

 ?>