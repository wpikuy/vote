<?php header("Content-type:text/html;charset=utf-8") ?>
<?php 
	include "conn.php";
	if (empty($_POST['username']) || empty($_POST['text']) || empty($_POST['img'])) {
		echo "<script>alert'请完善资料!';</script>";
		//header("location:index.php?method=add");
	}
	
	$username = addslashes($_POST['username']);
	$info = $_POST['text'];
	echo "<script>alert'".$username."'</script>";
	echo "<script>alert'".$info."'</script>";
	
	$uptypes=array(
    'image/jpg',
    'image/jpeg',
    'image/png',
    'image/pjpeg',
    'image/gif',
    'image/bmp',
    'image/x-png'
	);

	$max_file_size=2000000;     //上传文件大小限制, 单位BYTE
	$destination_folder="uploadimg/"; //上传文件路径

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		//
		if (!is_uploaded_file($_FILES['img']['tmp_name'])) {
			echo "<script>alert'图片不存在!';</script>";
			//header("location:index.php?method=add");
		}
		$file = $_FILES['img'];

		if ($file['size'] > $max_file_size) {
			echo "<script>alert'文件太大!';</script>";
			//header("location:index.php?method=add");
		}

		if (!in_array($file['type'],$uptypes)) {
			echo "<script>alert'文件类型不符,请重新上传!';</script>";
			//header("location:index.php?method=add");
		}

		if(!file_exists($destination_folder)){
   
        	mkdir($destination_folder);
    	}

    	$filename = $file['tmp_name'];
    	$pinfo = pathinfo($file['name']);
    	$ftype = $pinfo['extension'];
    	$destination = $destination_folder.time().'.'.$ftype;
    	function check($dest){ 
    		if (file_exists($dest)) {
    			$pinfo = pathinfo($file['name']);
    			$ftype = $pinfo['extension'];
    			$dest = $destination_folder.time().'.'.$ftype;
    			check($dest);
    		}else{ 
    			return $dest;
    		}
    	}

    	$destination = check($destination);
    	if (!move_uploaded_file($filename, $destination)) {
    		echo "<script>alert'移动文件出错!';</script>";
    		//header("location:index.php?method=add");
    	}else{ 
    		$date = date("Y-m-d H:i:s");
    		$sql = "insert into candidate values('','".$username."','".$info."','".$destination."','".$date."','0')";
    		mysql_query($sql) or die("插入数据失败".mysql_error()); 
    		echo "<script>alert'上传成功!';</script>";
    		//header("location:index.php?method=add");  	
    	}
	}

 ?>