<?php
$xml_data = "<xml>999999999999999</xml>";
$url = 'http://th.tobeyoung.net/Owner/mback';
$ch = curl_init();
$header[] = "Content-type: text/xml";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_data);
$response = curl_exec($ch);
if(curl_errno($ch))
{
    print curl_error($ch);
}
curl_close($ch);
echo 'ok';
?>