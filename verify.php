<?php
$access_token = 'woH/MO654EoGAE5scxArC5gbvfa1DZ1CZanq0m+9iJFRaADPaNwH2h8HJmQ986itV2h+Mimbi9ruSN5BWKhWoljTBmViHrMy/J9IZhCAF1h3qoaJlbqPtlXbWdaSH1NHlVEK3LH8OFs7hwkkjuvLXgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
