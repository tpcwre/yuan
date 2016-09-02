<?php




	$appid='wxf3894bb0957b4247';
	$secret='2de1afed6d71fc8884d17bfb79fbd95f';
	$uri = urlencode('http://www.wmwzx.com/test/wx/auth/index.php');
	$scope = 'snsapi_userinfo';	// snsapi_base
echo $res = init($appid,$secret,$uri,$scope);
var_dump(json_decode($res));
		

/*
功能:		使用auth2.0 获取用户 openid等信息
参数：
  	$appid 		公众号appid
	$secret		公众号secret
	$uri		授权的第三方回调页面地址
	$scope		
			snsapi_userinfo	(获取模式一：显示用户授权页面，获取用户基本信息);
			snsapi_base 	(获取模式二：不显示用户授权页面，只获取用户openid)
反回值：	返回json数据形式的用户信息 调取相关信息可使用json_decode转换数据类型,以对象方式调用。 

*/



function init($appid,$secret,$uri,$scope){
	$fdata = json_decode(file_get_contents('token'));
//如果token无效
	if(!$fdata->access_token || $fdata->expires_in < time()){
		$tks = json_decode(file_get_contents('token'));
		//如果有refresh_token
		if($tks->refresh_token){
			$url = "https://api.weixin.qq.com/sns/oauth2/refresh_token?appid={$appid}&grant_type=refresh_token&refresh_token={$tks->refresh_token}";
 			$tokens = curls($url);
			$tarr = json_decode($tokens);
			$tarr->expires_in=time()+7200;
			file_put_contents('token',json_encode($tarr));
			$data = getInfo($tarr);
			$data2 = json_decode($data);
			if(!$data2->errcode){
				return $data;
			}
			
		//如果没有refresh_token
		}
		$tokens = json_decode(getToken($appid,$secret,$uri,$scope));
		$tokens->expires_in = time()+7200;
		file_put_contents('token',json_encode($tokens));
		return getInfo($tokens);
//如果token有效
	}else{
		return getInfo($fdata);	

	}
}


/*
功能：获取 code
用途：获取token等值的必要条件 
参数：
	$appid: 公众号appid
	$uri  : 接收返回参数的个人页面地址
	$scope: 
		snsapi_base	(模式一：不显示授权页面，只获取用户的openid)
		snsapi_userinfo (模式一：显示授权页面，可获取全部用户信息)
注意：本函数需要另一页面 'token' 进行存储数据，需要有读写权限
*/
function getCode($appid,$uri,$scope){
	if($_GET['code']){
		return  $_GET['code'];
	}else{
	 	$url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid={$appid}&redirect_uri={$uri}&response_type=code&scope={$scope}&state=123#wechat_redirect";
		echo "<script>location.href='{$url}';</script>";		
	
	}
}
//获取 token,refresh_token,openid 等
function curls($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_close();
        return curl_exec($ch);
}



//获取token等数据
function getToken($appid,$secret,$uri,$scope){
	$code = getCode($appid,$uri,$scope);
        $url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid={$appid}&secret={$secret}&code={$code}&grant_type=authorization_code";
        return curls($url);
}



//获取用户信息
function getInfo($fdata){
        $url = "https://api.weixin.qq.com/sns/userinfo?access_token={$fdata->access_token}&openid={$fdata->openid}";
        return curls($url);
}

