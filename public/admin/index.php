<?php 
	include "conn.php";
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
	<?php
	if (!array_key_exists('name', $_SESSION)){
		$url="./login.php";
		echo "<script language=\"javascript\">";
		echo "location.href=\"$url\"";
		echo "</script>";
	}
	?>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>后台页面</title>

 	<link rel="stylesheet" href="css/bootstrap.css" media="screen">
	<link rel="stylesheet" href="css/index.css">
	<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
 </head>
 <body>
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">管理后台</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              <a href="logout.php" class="navbar-link">登出</a>
            </p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header"><h3>基本管理</h3></li>
              <li><a href="?method=add">添加候选人</a></li>
              <li><a href="?method=delete">删除候选人</a></li>
              <li><a href="?method=update">更新候选人</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
          <?php 
          $method = '';
          if($_SERVER['REQUEST_METHOD']=='GET'){
				if(isset($_GET["method"]))
				{
					$method = '';
					$method = $_GET["method"];
				}

	          	if(isset($_GET["id"]))
				{
					$id = '';
					$id = $_GET["id"];
				}

				if($method == "add")
				{
					?>
					<h3>添加候选人</h3>
					
					<?php
					require_once 'addCan.php'; 
					
				}elseif ($method == "delete"){
				
					?>
					<h3>删除候选人</h3>
					
					<?php
					require_once 'delCan.php';
				}
				elseif ($method == "update"){
				
					?>
					<h3>更新候选人</h3>
									
					<?php
					require_once 'updateCan.php';
				}
				elseif ($method == "modify"){
				
					?>
					<h3>更新候选人</h3>
													
					<?php
						require_once 'modify.php';
				}
				else
				{
					?>
			<h3>添加候选人</h3>
            <p>欢迎使用本投票系统 !</p>

					<?php
				}
			}
          ?>

          </div>
        </div>
      </div>
    </div>
 
 </body>
 </html>