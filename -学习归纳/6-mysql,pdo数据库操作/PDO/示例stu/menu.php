 <h2>学生信息管理</h2>
			<?php 
				
				error_reporting(E_ALL & ~E_NOTICE);
				$nan = $_GET['sex']==1?'selected':'';				
				$nv= $_GET['sex']==='0'?'selected':'0';
				
				if($_SERVER['PHP_SELF']=="/zuoye/stu/index.php"){
				
			?>
 
			<form action=<?php echo $_SERVER['PHP_SELF']; ?> >
				<input name="name" placeholder='按名字搜索.....' value=<?php echo @$_GET['name']; ?> >
				<select name="sex">
					<option value=''>性别</option>
					<option <?php echo $nan;?> value='1'>男</option>
					<option <?php echo $nv;?> value='0'>女</option>
				</select>
				<input type="submit" values='搜索'/>
			</form>
			<?php } ?>
            <a href="index.php">浏览信息</a> | 
            <a href="add.php">添加信息</a> 
            <hr/>