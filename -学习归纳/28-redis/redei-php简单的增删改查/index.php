<center>
	<h1>学生信息管理</h1>
	<a href='index.php'>浏览信息</a>
	<a href='add.php'>添加信息</a>
	<hr>
	<?php
		require "redis.php";
		$data = $redis->keys('stu*');
	?>
	<table width=800 border=1>
		<tr>
			<td>name</td><td>age</td><td>sex</td><td align='center'>操作</td>
		</tr>
		<?php
			foreach($data as $v){
				$data2 = $redis->hgetAll($v);
				echo "<tr>";
					echo "<td>{$data2['name']}</td>";
					echo "<td>{$data2['age']}</td>";
					echo "<td>{$data2['sex']}</td>";
					echo "<td align='center'><a href='del.php?del={$v}'>删除</a>　<a href='add.php?edit={$v}'>编辑</a></td>";
				echo "</tr>";
				//echo $v;
			}
		?>
	</table>
</center>
	
	
	
	
	