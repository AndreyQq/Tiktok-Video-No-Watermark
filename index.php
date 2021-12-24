<?php
/**
 * Tiktok短视频去水印
 * @Author yi005
 * @Date 2021.11.19
 * @Update 2021.12.23
 */


/**
 * 获取用户喜欢的视频
 * 接口限制 1请求/10秒
 */
$api = 'https://www.tikwm.com/api/user/favorite';
$unique_id = '@mineodesu69';
$postData = [
    'unique_id' => $unique_id,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * 获取评论的回复列表
 *
 **/
$api = 'https://www.tikwm.com/api/comment/list';
$params = [
    'comment_id' => '7044622953448211247',
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($params));
$obj = json_decode($response);

var_dump($obj);

/**
 * 获取视频的评论列表
 * https://vt.tiktok.com/ZSey5hMUR/
 * https://www.tiktok.com/@moosethecane/video/7044204887571238149
 * 7044204887571238149
 *
 **/
$api = 'https://www.tikwm.com/api/comment/list';
$videoUrl = 'https://www.tiktok.com/@moosethecane/video/7044204887571238149';
$params = [
    'url' => $videoUrl,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($params));
$obj = json_decode($response);

var_dump($obj);


/**
 * 获取国家代码列表
 * 接口限制 无
 */
$api = 'https://www.tikwm.com/api/region';
$api = 'https://www.tikwm.com/api/region';
$response = curl_request($api);
$obj = json_decode($response);
var_dump($obj);


/**
 * 获取任意国家热门视频列表
 * 接口限制 1请求/10秒
 * region 国家代码
 */
$api = 'https://www.tikwm.com/api/feed/list';
$postData = [
    'region' => 'JP',
    'count' => 10
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * 获取音乐详情
 * 接口限制 1请求/1秒
 * 支持多种格式
 * 6788770563495185158
 * https://vm.tiktok.com/xxxxxx/
 * https://www.tiktok.com/music/originalljud-6788770563495185158
 */
$api = 'https://www.tikwm.com/api/music/info';
$music_id = '6788770563495185158';
$postData = [
    'url' => '6788770563495185158'
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);


/**
 * 获取音乐内的视频
 * 接口限制 1请求/10秒
 */
$api = 'https://www.tikwm.com/api/music/posts';
$music_id = '6919702697465678594';
$postData = [
    'unique_id' => $music_id,
    'count' => 10,
    'cursor' => 0
];

$response = curl_request($api . '?' . http_build_query($postData));
$obj = json_decode($response);
var_dump($obj);

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
    'url' => $tikUrl,
    'hd' => 0   //传入1 获取高比特率视频
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
