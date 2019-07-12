<?php
$access_token = 'z02qjtEMuhTv9AmlIYgdUJqTMnJ+FQpFpz4gFXSZVtCU/PRgV5j7Hxj7D8iihVmcm2XiYsKgSgzJbKEZjGR4Xcx66Hf8xr+f6ZbOyhtc1KR3qoaJlbqPtlXbWdaSH1NH4L9Idk5i8Gr36lUWZkNtWwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
