<?php 
	include 'conn.php';
	$id = $_GET['id'];
	$sql = "select * from candidate where id=".$id;
	$result = mysql_query($sql);
	$can = mysql_fetch_array($result);
 ?>
<div style="margin-left:60px;">
	<form action="modify_process.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
	<table cellspacing="5" cellpadding="5">
		<tr>
			<td align="right" valign="top">姓名:</td>
			<td><input type="text" name="username" placeholder="候选人姓名" value="<?php echo $can['name']; ?>"></td>
		</tr>
		<tr>
			<td align="right" valign="top">照片:</td>
			<td><input type="file" name="img"></td>
		</tr>
		<tr>
			<td align="right" valign="top">个人资料:</td>
			<td><textarea name="text"  rows="4" ><?php echo $can['info']; ?></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<button name="sub" type="submit" >提交</button>&nbsp&nbsp&nbsp&nbsp
				<button name="reset" type="reset" >重置</button>
			</td>
		</tr>
	</table>
</form>
</div>