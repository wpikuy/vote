<?php 
	include "conn.php";
	header("content-type:text/html; charset=utf8");
	if ($_SERVER['REQUEST_METHOD'] =='GET') {
		$sql = "select * from candidate where id=".$_GET['id'];
		$result = mysql_query($sql);
		if (!mysql_num_rows($result)) {
			echo "没有找到该候选人信息!".mysql_error();
		}else{ 
			$sql = "delete from candidate where id=".$_GET['id'];
			if (mysql_query($sql)) {
				header("location:index.php?method=delete");
			}else{ 
				echo "删除操作失败".mysql_error();
			}
		}
	}

 ?>