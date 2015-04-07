<?php 
	include 'conn.php';
	session_start();

	$name = addslashes($_POST['name']);
	$psw = $_POST['pwd'];

	if (!empty($name) && !empty($psw)) {
		$sql = "select * from admin where name='".$name."' and password='".$psw."'" ;
		$result = mysql_query($sql);
		$row = mysql_num_rows($result);
		if($row ==1) {
			$SESSION['name'] = $name;
			header("location:index.php");
		}else{ 
			echo "<script>alert('用户名或密码错误!');window.location.href ='login.html';</script>";
		}
	}
	
 ?>