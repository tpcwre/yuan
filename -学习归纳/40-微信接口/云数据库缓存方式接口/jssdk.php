<?php
class JSSDK {
  private $appId;
  private $appSecret;
    public $link;

  public function __construct($appId, $appSecret) {
    $this->appId = $appId;
    $this->appSecret = $appSecret;
    $this->link = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

    if($this->link)
    {
        mysql_select_db(SAE_MYSQL_DB,$this->link);
    }
	
  }

  public function getSignPackage() {
    $jsapiTicket = $this->getJsApiTicket();

    // ע�� URL һ��Ҫ��̬��ȡ������ hardcode.
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $timestamp = time();
    $nonceStr = $this->createNonceStr();

    // ���������˳��Ҫ���� key ֵ ASCII ����������
    $string = "jsapi_ticket=$jsapiTicket&noncestr=$nonceStr&timestamp=$timestamp&url=$url";

    $signature = sha1($string);

    $signPackage = array(
      "appId"     => $this->appId,
      "nonceStr"  => $nonceStr,
      "timestamp" => $timestamp,
      "url"       => $url,
      "signature" => $signature,
      "rawString" => $string
    );
    return $signPackage; 
  }

  private function createNonceStr($length = 16) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $str = "";
    for ($i = 0; $i < $length; $i++) {
      $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
    }
    return $str;
  }

    
    //��ȡticket
 private function getJsApiTicket() {			
     //���ݿ�����ticket��ʱ��
     $data=mysql_query("select * from ticket");
     $data2=mysql_fetch_assoc($data);
     $time=time()+7000;
     if ($data2['time'] < time()) {			//���ʱ�����
         $accessToken = $this->getAccessToken();		//�Ȼ�ȡtoken

      // �������ҵ�������� URL ��ȡ ticket
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/get_jsapi_ticket?access_token=$accessToken";
         $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?type=jsapi&access_token=$accessToken";  	//��token����url�ֻ�ȡticket
         $res = json_decode($this->httpGet($url));		//�������󲢻�ȡ���ص�ticket
     	 $ticket = $res->ticket;
         mysql_query("update ticket set ticket='{$ticket}',time='{$time}'");
    } else {
      $ticket = $data2['ticket'];
    }
    return $ticket;
  }

    
    //��ȡtoken
  private function getAccessToken() {
   	$data = mysql_query("select * from token");
    $data2 = mysql_fetch_assoc($data);
    $time=time()+7000;
    if ($data2['time'] < time()) {
      // �������ҵ��������URL��ȡaccess_token
      // $url = "https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid=$this->appId&corpsecret=$this->appSecret";
      $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$this->appId&secret=$this->appSecret";
      $res = json_decode($this->httpGet($url));
      $token = $res->access_token;
        mysql_query("update token set token='{$token}',time='{$time}'");
    } else {
      $token = $data2['token'];
    }
    return $token;
  }

  private function httpGet($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    // Ϊ��֤��������������΢�ŷ�����֮�����ݴ���İ�ȫ�ԣ�����΢�Žӿڲ���https��ʽ���ã�����ʹ������2�д����ssl��ȫУ�顣
    // ����ڲ�������д����ڴ˴���֤ʧ�ܣ��뵽 http://curl.haxx.se/ca/cacert.pem �����µ�֤���б��ļ���
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
    curl_setopt($curl, CURLOPT_URL, $url);

    $res = curl_exec($curl);
    curl_close($curl);

    return $res;
  }
}

