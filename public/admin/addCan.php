<div style="margin-left:60px;">
	<form action="add_process.php" method="post" enctype="multipart/form-data">
	<table cellspacing="5" cellpadding="5">
		<tr>
			<td align="right" valign="top">姓名:</td>
			<td><input type="text" name="username" placeholder="候选人姓名"></td>
		</tr>
		<tr>
			<td align="right" valign="top">照片:</td>
			<td><input type="file" name="img"></td>
		</tr>
		<tr>
			<td align="right" valign="top">个人资料:</td>
			<td><textarea name="text"  rows="4"></textarea></td>
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