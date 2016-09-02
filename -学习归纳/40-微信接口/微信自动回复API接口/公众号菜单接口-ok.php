<?php
/*
本接口可单独直接调用 ，设置好appid和secret 及按钮和链接即可
	1.设置 appid 和 secret
	2, 设置按钮
	3, 栏目最多有两个
	4，按钮最多可以有四个	
	5, 本接口不需要设置 公众号的基本设置-》服务器配置（无需配置）
*/
//$appid = "wxc2a92909fa2404ba";
//$appsecret = "ab93d5eca1b28bcb77e9d7c079bcc5ae";
$appid='wx09f7a59a4c6bf35e';
$appsecret='79b909671d6960ac8bfa8640d082878f';
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

$output = https_request($url);
$jsoninfo = json_decode($output, true);

$access_token = $jsoninfo["access_token"];


$jsonmenu = '{
      "button":[
      {
            "name":"修改栏目名",		
           "sub_button":[
            {
               "type":"view",
               "name":"view可链接",
		"url":"http://www.baidu.com"
            },
            {
               "type":"click",
               "name":"click不可链接",
               "key":"aa"
            },
            {
                "type":"view",
                "name":"ccccc",
                "url":"http://m.hao123.com/a/tianqi"
            }]
      

       },
       {
           "name":"eeeee",
           "sub_button":[
            {
               "type":"click",
               "name":"fffff",
               "key":"company"
            },
            {
               "type":"click",
               "name":"ggggg",
               "key":"game"
            },
            {
               "type":"view",
               "name":"bbbbb",
                "url":"http://www.sina.com"
            },
            {
                "type":"click",
                "name":"hhhhh",
                "key":"joke"
            }]
       

       }]
 }';


$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
$result = https_request($url, $jsonmenu);
var_dump($result);

function https_request($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

?>
