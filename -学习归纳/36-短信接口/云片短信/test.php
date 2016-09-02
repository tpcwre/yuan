<?php



header("Content-Type:text/html;charset=utf-8");
$apikey = "e6774c2bc75e45adea5fa8260c1eefe5"; //修改为您的apikey(https://www.yunpian.com)登陆官网后获取
$mobile = "15652212798"; 				//请用自己的手机号代替
$text="【云片网】您的验证码是6556";		//发送的短信内容

$ch = curl_init();		//初始化curl
cinit($ch);				//设置CURL相关参数都在此函数中

// 取得用户信息
$json_data = get_user($ch,$apikey);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);

$data=array('text'=>$text,'apikey'=>$apikey,'mobile'=>$mobile);
$json_data = send($ch,$data);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);
/*
//--发送短信
$data=array('text'=>$text,'apikey'=>$apikey,'mobile'=>$mobile);
$json_data = send($ch,$data);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);


//--发送模板短信(需要对value进行编码)
$data=array('tpl_id'=>1238329,'tpl_value'=>urlencode('#code1#').'='.urlencode('aaa').'&'.urlencode('#code2#').'='.urlencode('bbb'),'apikey'=>$apikey,'mobile'=>$mobile);
		//模板内容1：	710545	【优乐平台】您已成功订购我们的#code1#,#code2#产品！
		//注：$data中的 #code1#,#code2#  与 模板中的#code1#,#code2# 都是一一对应的
print_r ($data);
$json_data = tpl_send($ch,$data);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);


//--发送语音验证码
$data=array('code'=>'9876','apikey'=>$apikey,'mobile'=>$mobile);
$json_data =voice_send($ch,$data);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);


//--获取回复短信
$data = array('apikey'=>$apikey);
$json_data =backinfo($ch,$data);
$array = json_decode($json_data,true);
echo '<pre>';print_r($array);
curl_close($ch);
*/
/***************************************************************************************/

function cinit(&$ch){
	date_default_timezone_set('PRC');	//设置时区
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));//设置header信息
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);		//直接显示获取信息
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);	//设置超时时间
	curl_setopt($ch, CURLOPT_POST, 1);		//设置通信方式为post
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //关闭服务器验证
}

//获得账户
function get_user($ch,$apikey){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/user/get.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('apikey' => $apikey)));
    return curl_exec($ch);
}

//发送短信
function send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}

//发送模板短信
function tpl_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/tpl_send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}

//发送语音验证码
function voice_send($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'http://voice.yunpian.com/v1/voice/send.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}

//获取回复短信
function backinfo($ch,$data){
    curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/pull_reply.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    return curl_exec($ch);
}
?>