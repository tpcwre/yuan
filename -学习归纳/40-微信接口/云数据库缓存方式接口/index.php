<?php
require_once "../jssdk.php";
$jssdk = new JSSDK("wxd3a746b31f4632ab", "5d5f1ae02732f4fc33f46b0d2f0742e5");
$signPackage = $jssdk->GetSignPackage();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content="width=device-width,initital-scale=1">
  <title></title>
  <style>
      .foot span{
          float:left;
          margin:6px;
          font-size:12px;
      }
  </style>
</head>
<body>
    <div style="width:310px;border:1px solid #ccc;margin:0 auto;text-indent:6px">
        <h2>�������˷�ΰ���</h2>
        <div style='font-size:13px'>
            <span><?php  echo date('Y-m-d H:i:s') ;?></span>����
            <span style="font-size:18px;color:blue">ÿ������</span>
        </div><hr color='#ccc' size=1>
        <div  id='vedio'>
            <img src='https://mmbiz.qlogo.cn/mmbiz/fG8MR2hFXU8YlGk7PdpAINB0YYFyEaiayM6WrxZ8fOVAv4UIXCAZuDFZAIez5FDLrdwryZJAlxcrPfJk3fRE3yg/0?wx_fmt=jpeg' width=310/>
        </div>
        <div style='font-size:10px;padding:6px'>��Ѷ��Ƶ</div>
        <div class='foot' style="padding-top:50px">
            <span>�Ķ� </span>
            <span>��</span>
            <span style="float:right">�ٱ�</span>
            <div style="clear:both"></div>
        </div>
    </div>
</body>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
      //  debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
    jsApiList: [
      "openlocation",		//��ʾ��ͼλ��
      "chooseImage",		//����
      'onMenuShareTimeline',//ת��
    ]
  });
    wx.ready(function(){
            var stat=0;
         	document.getElementById('vedio').onclick=function(){
                if(stat==0){
                    
                    alert('������Ƶת����ſ��Թۿ�������');
                    wx.onMenuShareTimeline({
                        title: '�������˷�ΰ���', // �������
                        link: 'http://mp.weixin.qq.com/s?__biz=MzIyMDEwODYwNQ==&mid=400423473&idx=1&sn=28519730cef87487edbdf174f8490386#rd', // ��������
                        imgUrl: 'https://mmbiz.qlogo.cn/mmbiz/fG8MR2hFXU8YlGk7PdpAINB0YYFyEaiayM6WrxZ8fOVAv4UIXCAZuDFZAIez5FDLrdwryZJAlxcrPfJk3fRE3yg/0?wx_fmt=jpeg', // ����ͼ��
                        success: function () { 
                            stat=1;
                            location.href="http://mp.weixin.qq.com/s?__biz=MzIyMDEwODYwNQ==&mid=400423473&idx=1&sn=28519730cef87487edbdf174f8490386#rd";
                         
                        },
                        cancel: function () { 
                            alert('��ת���޷��ۿ�Ŷ~~~');
                        }
                    });
                }
             };
    });

 
</script>
</html>


