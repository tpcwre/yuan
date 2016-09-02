header('content-type:text/html;charset=utf-8');
//$jssdk = new JSSDK("wxf992052a0717cd09","e748cb124cb69f04d244461700913821");          //jiafafangzhi.cn
$jssdk = new JSSDK("wx8d853a94c513ec0f","279a03d8fb0e6efeb0e1532781f74682"); 
$signPackage = $jssdk->GetSignPackage();
?>

<body style="width:100%;height:100%;background:#000;color:#fff">
2222222
aiaaaaaaa
</body>

<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
 <script>
  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      // 所有要调用的 API 都要加到这个列表中
        'onMenuShareAppMessage',				//调用朋友转发功能的基础功能
        'wx.onMenuShareAppMessage',             //调用转发给朋友功能

    ]
  });
  wx.ready(function () {
        //设置转发给朋友功能
        wx.onMenuShareAppMessage({
                title: '高明', // 分享标题
                desc: 'aaaaaaaaaa', // 分享描述
                link: 'http://www.sina.com.cn', // 分享链接
                success: function () { 
        alert(3);
                },
                cancel: function () { 
        alert(4);
                }
        });
  });
</script> 