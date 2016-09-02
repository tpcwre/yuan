<!DOCTYPE html>
<html>
<head>
	<title>留言板</title>
	<meta charset='utf-8'/>
</head>
<body>
<?php
	$fp=fopen('./data','r');

	
	
?>

<div style='width:800px;height:600px;margin:0 auto;word-break:break-all'>
	<!--留言-->
	<?php
		while(!feof($fp)){
			$fgets=fgets($fp);
			if(!empty($fgets)){
				$arr=explode('|()|',$fgets);
				echo '<div style="border:1px solid #ccc;">';
					echo "<div style='padding:10px 20px;word-break:break-all;'>".$arr[0].'　在　'.date("Y-m-d H:i:s",$arr[1]).'　说：</div>';
					echo $arr[2];
					
				echo '</div>';
			}
		}
	?>
	
	<!--发言-->
	<div style="height:200px;">
		<div style="color:red;font-size:20px;line-height:35px;font-weight:bold">请遵守当地法律，理性发言。拒绝不良信息从我做起</div>
		<form action='add.php' method='post'>
			<textarea name='content' style="resize:none;width:796px;height:160px;border:1px solid #ccc"></textarea>
			<input type='submit' value='发表留言'/>
		</form>
	</div>
	
</div>
</body>
</html>










