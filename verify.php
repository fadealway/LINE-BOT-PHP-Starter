<?php
$access_token = 'MzXIgz5p2mJwSQOMg/oqWx5bcKKYcWFogOqBOsbSXiDN0FIG6MwbALSO5UC1b+0tSem+BCIDNklgDSKX6npkyQ8ivwt0A4WxABS4OMWWgfRK0/nbpdayEpuPlCM4roY4xPkz5ABzZilQsE0K6q4sQQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;