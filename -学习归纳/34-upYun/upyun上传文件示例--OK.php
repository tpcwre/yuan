<?php
/*
	//--图片上传功能：
		设置好下面五项需要设置的参数即可调用用本upyun 文件上传接口

	//-- 图片上传成功后访问方式 ： 空间名+b0.upaiyum.com/文件名  如下：
		空间名：youle1
		要访问的文件: 	/111.png
		访问地址为：	http://youle1.b0.upaiyun.com/111.png
						http://homes.b0.upaiyun.com/zhan.png
						http://xiangshui.b0.upaiyun.com/111.png
	//-- 域名防盗链
		服务-》相应服务的功能配置->防次链
		
		
    $bucketName   = 'homes'; 	//空间名 (需要设置)
    $operatorName = 'tpcwre';	//操作员账号 (需要设置)
    $operatorPwd  = 'xiaodong123'; //操作员密码 (需要设置)
	
	
	$bucketName   = 'xiangshui'; 	//空间名 (需要设置)
    $operatorName = 'youle1';	//操作员账号 (需要设置)
    $operatorPwd  = 'youle123'; //操作员密码 (需要设置)
	
	$bucketName   = 'youle1'; 	//空间名 (需要设置)
    $operatorName = 'youle1';	//操作员账号 (需要设置)
    $operatorPwd  = 'youle123'; //操作员密码 (需要设置)
*/


		up('268907.jpg');



function up($name){
    header("content-type:text/html;charset=utf-8");
    $bucketName   = 'xiangshui'; 	//空间名 (需要设置)
    $operatorName = 'youle1';	//操作员账号 (需要设置)
    $operatorPwd  = 'youle123'; //操作员密码 (需要设置)

    $filePath = $name;	//被上传的文件路径(需要设置)
    $fileSize = filesize($filePath);

    $serverPath = $name;		//文件上传到服务器的路径与存储名字 (需要设置)
    $uri = "/$bucketName/$serverPath"; 	//文件上传到服务器的服务端路径


    //生成签名时间。得到的日期格式如：Thu, 11 Jul 2014 05:34:12 GMT
    $date = gmdate('D, d M Y H:i:s \G\M\T');
    $sign = md5("PUT&{$uri}&{$date}&{$fileSize}&".md5($operatorPwd));

    $ch = curl_init('http://v0.api.upyun.com' . $uri);

	echo 'http://v0.api.upyun.com' . $uri;
    $headers = array(
        "Expect:",
        "Date: ".$date, // header 中需要使用生成签名的时间
        "Authorization: UpYun $operatorName:".$sign
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_PUT, true);

    $fh = fopen($filePath, 'rb');
    curl_setopt($ch, CURLOPT_INFILE, $fh);
    curl_setopt($ch, CURLOPT_INFILESIZE, $fileSize);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    if(curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200) {
        echo "上传成功";
	echo "<img src='http://{$bucketName}.b0.upaiyun.com/{$serverPath}' />";
    } else {
        $errorMessage = sprintf("UPYUN API ERROR:%s", $result);
        echo $errorMessage;
    }
    curl_close($ch);
}