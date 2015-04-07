<table class="table table-hover">
  <caption>候选人表格</caption>
  <thead>
    <tr>
      <th>编号</th>
      <th>姓名</th>
      <th>照片</th>
      <th>个人资料</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  		include 'conn.php';
  		$sql = "select * from candidate order by id desc";
  		$result = mysql_query($sql);
  		$row = mysql_num_rows($result);
  		for($i=0; $i<$row;$i++ ){ 
  			$ele[$i] = mysql_fetch_array($result);
  			echo "<tr>";
  			echo "<td> ".($i+1)."</td>";
  			echo "<td> ".$ele[$i]['name']."</td>";
  			echo "
  			<td> 
				<img alt='' src='".$ele[$i]['pic']."' height = '70' width='95'>
  			</td>";
  			echo "<td> ".$ele[$i]['info']."</td>";?>
  			<td><a class="btn btn-primary" href="?method=modify&id=<?php echo $ele[$i]['id']; ?>">修改</a></td>
  			<?php
  			echo "</tr>";
  		}
   ?>

  </tbody>
</table>