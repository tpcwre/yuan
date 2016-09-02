<?php //提交短信
	$post_data = array();
	$post_data['userid'] = 1809;
	$post_data['account'] = '123asd';
	$post_data['password'] = '123123';
	$post_data['content'] = '【凯途】验证码';  
	$post_data['mobile'] = '18310046884';
	$post_data['sendtime'] = ''; //不定时发送，值为0，定时发送，输入格式YYYYMMDDHHmmss的日期值
	$url='http://118.145.18.236:9999/sms.aspx?action=send';
	$o='';
	foreach ($post_data as $k=>$v)
	{
	   $o.="$k=".urlencode($v).'&';
	}
	$post_data=substr($o,0,-1);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //如果需要将结果直接返回到变量里，那加上这句。
	$result = curl_exec($ch);
	//var_dump($result);
?>
