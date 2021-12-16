<?php
/**
 * Tiktok短视频去水印
 * @Author yi005
 * @Date 2021.11.19
 * @Update 2021.12.14
 */


/**
 * 获取用户关注列表
 * 接口限制 1请求/1秒
 */
$api = 'https://www.tikwm.com/api/user/following';
$user_id = '6943972350728700930';
$postData = [
    'user_id' => '6943972350728700930',
    'count' => 50,
    'time' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * 获取用户粉丝列表
 * 接口限制 1请求/1秒
 */
$api = 'https://www.tikwm.com/api/user/followers';
$user_id = '6943972350728700930';
$postData = [
    'user_id' => '6943972350728700930',
    'count' => 50,
    'time' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * 获取用户发布的视频
 * 接口限制 1请求/10秒
 */
$api = 'https://www.tikwm.com/api/user/posts';
$unique_id = '@mineodesu69';
$postData = [
    'unique_id' => $unique_id,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


$api = 'https://www.tikwm.com/api/';
/**
 * 支持多种格式
 * https://vt.tiktok.com/ZSey5hMUR/
 * https://www.tiktok.com/@umay_874/video/6996665911927262466
 * 6996665911927262466
 *
 **/
$tikUrl = 'https://www.tiktok.com/@umay_874/video/6996665911927262466';
$postData = [
    //'plat' => 'tik',   //Tiktok传 tik  不传默认tiktok
    'url' => $tikUrl
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);

if ($obj->code === 0) {
    echo $obj->data->play;    //无水印视频
} else {
    echo $obj->msg;
}

function curl_request($url, $postData = [])
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    //curl_setopt($curl, CURLOPT_POST, true);
    //curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_ACCEPTTIMEOUT_MS, 10000);
    curl_setopt($curl, CURLOPT_ENCODING, 'gzip');

    $response = curl_exec($curl);
    return $response;
}
