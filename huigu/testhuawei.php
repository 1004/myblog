<?php
/**
 * Created by PhpStorm.
 * User: xky
 * Date: 2018/3/26 0026
 * Time: 16:03
 */

$appSecret = "a5f9ee949303ad7a889fc16d2150e53c";
$appid = "10549405";
$tokenUrl = "https://login.cloud.huawei.com/oauth2/v2/token";
$accessToken = "";
$tokenExpiredTime;

$appSecretUtf8 = urlencode($appSecret);
$msgBody = "grant_type=client_credentials&client_secret=$appSecretUtf8&client_id=$appid";

function request_by_curl($remote_server, $post_string) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remote_server);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
    curl_setopt($ch, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
    curl_setopt($ch, CURLOPT_POST, 1); // 发送一个常规的Post请求
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $data = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Errno'.curl_error($ch);//捕抓异常
    }
    curl_close($ch);
    return $data;
}

$data = request_by_curl($tokenUrl,$msgBody);
//echo $data;
print_r($data);
