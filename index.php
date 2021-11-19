<?php
/**
 * Tiktok短视频去水印
 * @Author yi005
 * @Date 2021.11.19
 */


$api = 'https://www.tikwm.com/api/';
$tikUrl = 'https://www.tiktok.com/@umay_874/video/6996665911927262466';
$postData = [
    'plat' => 'tik',   //Tiktok传 tik
    'url' => $tikUrl
];

$response = curl_post($api, $postData);
$obj = json_decode($response);

if ($obj->code === 0) {
    echo $obj->data->play;    //无水印视频
} else {
    echo $obj->msg;
}

function curl_post($url, $postData)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
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
