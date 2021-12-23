# Tiktok-Video-No-Watermark

Tiktok短视频去水印


近期将要支持的API

+ [x] [视频去水印](#视频去水印)

+ [x] [获取用户发布的视频](#获取用户发布的视频)

+ [x] [获取用户详情](#获取用户详情)

+ [x] [获取关注列表](#获取关注列表)

+ [x] [获取粉丝列表](#获取粉丝列表)

+ [x] [获取音乐内视频列表](#获取音乐内视频列表)

+ [x] [获取音乐详情](#获取音乐详情)

+ [x] [获取国家代码列表](#获取国家代码列表)

+ [x] [获取任意国家热门视频](#获取任意国家热门视频)

+ [x] [获取视频评论列表](#获取视频评论列表)

+ [x] [获取评论回复列表](#获取评论回复列表)

+ [ ] 获取任意国家热门标签

+ [ ] 通过标签获得视频列表

+ [ ] 搜索视频

# 在线测试

[```https://www.tikwm.com/```](https://www.tikwm.com/)


## <a href="https://www.buymeacoffee.com/yi005" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-blue.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

#### 如果它对你有帮助，请支持一个star

# 更新日志

2021.12.23 更新
+ 增加 [获取视频评论列表](#获取视频评论列表) 接口
+ 增加 [获取评论回复列表](#获取评论回复列表) 接口
+ [视频去水印](#视频去水印) 增加 id 字段

2021.12.20 更新
+ 增加 [获取音乐详情](#获取音乐详情) 接口
+ 增加 [获取任意国家热门视频](#获取任意国家热门视频) 接口
+ 增加 [获取国家代码列表](#获取国家代码列表) 接口

2021.12.17 更新
+ 增加 music_info 字段 音乐详情
+ 增加 [获取音乐内视频列表](#获取音乐内视频列表) 接口

2021.12.16 更新
+ 增加 [获取关注列表](#获取关注列表) 接口
+ 增加 [获取粉丝列表](#获取粉丝列表) 接口

2021.12.15 更新
+ 增加 [获取用户详情](#获取用户详情) 接口
+ 增加 video_id 字段 ([获取用户发布的视频](#获取用户发布的视频))

2021.12.14 更新

+ 增加 [获取用户发布的视频](#获取用户发布的视频) 接口 限制 1请求/10 秒([查看付费API](https://rapidapi.com/yi005/api/tiktok-video-no-watermark2/))

2021.12.09 更新

+ 修改 请求参数 plat 可空 默认值为tik
+ 支持 GET | POST 如果传入相同的key, POST将覆盖GET参数
+ 更简便的请求方式 如 ```https://www.tikwm.com/api/?url=6996665911927262466```
+ 优化 ```https://vt.tiktok.com/XXXXXX``` 类型链接的查询速度
+ 免费接口限制 1请求/秒 ([查看付费API](https://rapidapi.com/yi005/api/tiktok-video-no-watermark2/))

2021.12.06 更新

+ 增加 nickname 用户昵称

2021.12.03 更新

+ 增加 region 国家代码
+ 增加 origin_cover 静态封面
+ 增加 play_count 播放量
+ 增加 digg_count 红心量
+ 增加 comment_count 评论量
+ 增加 create_time 视频创建时间
+ 增加 author
    + unique_id 用户名
    + avatar 头像

2021.12.01 更新

+ 增加 music 音乐MP3

# 视频去水印

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/```

### 请求方式：```get|post```

### 参数

```
plat - 平台（tik） 不传默认为tik

url - 短视频地址 支持（6996665911927262466 | https://vt.tiktok.com/XXXXXX | https://www.tiktok.com/@umay_874/video/6996665911927262466）等多种链接格式
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "region": "TR",
    "title": "#hangi şarkılarla video atmamı isterdiniz 🇹🇷🐺#🐺🇹🇷🤘🐺🇹🇷🤘🐺🇹🇷🤘🐺🇹🇷 #gazimustafakemalataturk #yüksekova",
    "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/8c75c54aaa0f486cb6fe82d3e466cd11_1629038230?x-expires=1638532800&x-signature=%2FhxZ97lx9tvpccHiDoIV9ff7oJ4%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/15f610be8e2d4818bf049eda670e3611_1629038230~tplv-tiktokx-360p.jpeg?x-expires=1638532800&x-signature=S6nJz1rmuztGs1rADsKePgg37HY%3D",
    "play": "https://v16m-default.akamaized.net/4cc86938b3e2a3695b9127eb86b397b6/61aa0823/video/tos/alisg/tos-alisg-pve-0037c001/098a42acd7874257961c7ec7ea77a4cc/?a=0&br=1788&bt=894&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=202112030605450102230821640703B9F3&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=ajRocDk6ZjZsNzMzODczNEApZ2lnO2k1aWQ7Nzk4Zzk2ZGdkbm5ucjRvYWBgLS1kMS1zc2BjXy9iMTMwMDUzMTZeMmI6Yw%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/555d16254282b184d654b17338a68632/61aa0823/video/tos/alisg/tos-alisg-pve-0037c001/433818c0e6eb4554a8dc70fa12f76373/?a=0&br=1706&bt=853&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=202112030605450102230821640703B9F3&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=ajRocDk6ZjZsNzMzODczNEApaWZpNTNmZDs5N2Q0ZDo3M2dkbm5ucjRvYWBgLS1kMS1zc15fNS9gMl4vNmA2MmIwMmE6Yw%3D%3D&vl=&vr=",
    "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/6842547937583631110.mp3",
    "play_count": 56297,
    "digg_count": 5199,
    "comment_count": 130,
    "create_time": 1629038229,
    "author": {
      "unique_id": "umayyyy238",
      "nickname": "Umay 🐺",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/0f4b7298cc9c70d41f49eb36fd510186~c5_300x300.webp?x-expires=1638597600&x-signature=xQzF9C2X5CSXjlUMwovg6ZFGNPY%3D"
    }
  }
}
```

</details>

# 获取用户发布的视频

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/user/posts```

### 请求方式：```get|post```

### 参数

```
unique_id - 例 @mineodesu69 
count - 10 (最小1 最大35) 获取数量
cursor - 0 (hasMore为true时，可传入上次请求返回的cursor加载更多)
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [
      {
        "region": "JP",
        "title": "チャイナ服のスリットたまんないよね？🤭💕",
        "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/039a83b2a2a94b24b1e29a540f88ab49_1639312726?x-expires=1639512000&x-signature=8p7RLRMtXpua31Wa%2B1kDpwffZB8%3D",
        "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/7029c7e45b004372b9f30fd0dffea682_1639312725~tplv-tiktokx-360p.jpeg?x-expires=1639512000&x-signature=YJn1K9BaRoNJChphJwlK%2BMhrNoo%3D",
        "play": "https://v16m-default.akamaized.net/41caea488a8d07f9da0fd64e1cce9a9d/61b8fb08/video/tos/alisg/tos-alisg-pve-0037/c795108b3b384e0b851200eac80a72af/?a=0&br=5566&bt=2783&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=202112141413530102451332071559A25D&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M3BtO2U6Zmx4OTMzODgzNEApOGg7NGhoOWU5N2Y4ZjplPGdpYi1scjQwbm5gLS1kLy1zc14tMC00YV8yX18yMzM0MzI6Yw%3D%3D&vl=&vr=",
        "wmplay": "https://v16m-default.akamaized.net/f9d89538f9e6b91f0d7f6f509fdd5903/61b8fb08/video/tos/alisg/tos-alisg-pve-0037/32b253a1b50646af8cdb08a253ed9a3a/?a=0&br=3408&bt=1704&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=202112141413530102451332071559A25D&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M3BtO2U6Zmx4OTMzODgzNEApOTs6aTNoZjszNzs6N2g0aWdpYi1scjQwbm5gLS1kLy1zcy1eYy9eNjMvNjMvXjU1Xl86Yw%3D%3D&vl=&vr=",
        "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/7002634676770999045.mp3",
        "play_count": 7064,
        "digg_count": 324,
        "comment_count": 14,
        "create_time": 1639312724,
        "author": {
          "unique_id": "mineodesu69",
          "nickname": "こずりん",
          "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8~c5_300x300.webp?x-expires=1639576800&x-signature=LE%2FGp5afJOJTwdMXUizKU%2FMyZtY%3D"
        }
      }
    ],
    "cursor": "1639312724000",
    "hasMore": true
  }
}
```

</details>


# 获取用户详情

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/user/info```

### 请求方式：```get|post```

### 参数

```
unique_id - 例 @mineodesu69 
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "user": {
      "id": "6943972350728700930",
      "uniqueId": "mineodesu69",
      "nickname": "こずりん",
      "avatarThumb": "https://p16-sign-sg.tiktokcdn.com/aweme/100x100/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8.jpeg?x-expires=1639641600&x-signature=3a7O4IkK4j%2FhTRhKwpZAnbrHBqc%3D",
      "avatarMedium": "https://p16-sign-sg.tiktokcdn.com/aweme/720x720/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8.jpeg?x-expires=1639641600&x-signature=qrorwjUDdRWZYDZ%2BnKDNlsGUeXw%3D",
      "avatarLarger": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/a1daf088c51a3183dae1513df606f3a8.jpeg?x-expires=1639641600&x-signature=cF3LB9vK7SU%2F2QD%2BL2KBU2d2fVI%3D",
      "signature": "【毎日投稿🐼】\n→ → → 18時頃\n君にちょうどいい女の子·͜·\n長野出身今は関西\n- ̗̀  SNSまとめ👇🏻   ̖́-",
      "verified": false,
      "secUid": "MS4wLjABAAAAx79jlw39ozlKeUQoa9QjOtJBzelssB4fzLwYsL0za6BOjMxA0aYRq4COI3zI7lZ_",
      "secret": false,
      "ftc": false,
      "relation": 0,
      "openFavorite": true,
      "bioLink": {
        "link": "https://lit.link/kozurin69",
        "risk": 3
      },
      "commentSetting": 0,
      "duetSetting": 0,
      "stitchSetting": 0,
      "privateAccount": false,
      "isADVirtual": false
    },
    "stats": {
      "followingCount": 262,
      "followerCount": 207900,
      "heartCount": 1400000,
      "videoCount": 191,
      "diggCount": 911,
      "heart": 1400000
    }
  }
}
```

</details>

# 获取关注列表

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/user/following```

### 请求方式：```get|post```

### 参数

```
user_id - 例 6943972350728700930
count - 1 ~ 200 默认 50
time -  hasMore为真时，传入time加载下一页内容
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "followings": [{
      "id": "6566729240732614657",
      "region": "JP",
      "sec_uid": "MS4wLjABAAAAPjqPx1dTQnBcNVh02MLMStHYmM2fF55gofBYdZj-f45LZW83-W_JS2G6Xsa1XC6p",
      "unique_id": "yuuna_1210",
      "nickname": "悠那🌹🌕",
      "signature": "ﾌｱﾝﾏ🌹🌕Yuuna🇯🇵\nInstagram、YouTube、ファンクラブはこちら⬇️",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/91db82467172b59501cf42d89202b2ef~c5_300x300.webp?x-expires=1639742400&x-signature=H3F9uVCyzlk08lO9YooEnGpuK0E%3D",
      "aweme_count": 206,
      "follower_count": 1172117,
      "favoriting_count": 1430,
      "total_favorited": 6490676,
      "youtube_channel_title": "Yuuna ユウナ",
      "youtube_channel_id": "UCQzD8bUstNeFmxAq6BF2VWg",
      "twitter_name": "Yuuna12100930",
      "twitter_id": "1428762131105652739"
    }, {
      "id": "6821369322682778626",
      "region": "JP",
      "sec_uid": "MS4wLjABAAAA2_YTgxz3kLb2XoyC3xOXnosim3gdiqMtFHnjRvckabZJFQ40XBOVttDCiB5cwa3b",
      "unique_id": "i.am_natsuki_",
      "nickname": "なっちゅん🤍🍣",
      "signature": "Age:21   JAPAN🇯🇵TOKYO🗼\n\nLOVELY JAPANESE GIRL💓☕️🥰\n仲良くしてね！",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/d23cc59fad7298076477764d4cd7df93~c5_300x300.webp?x-expires=1639742400&x-signature=GOa3WnBctzln5z4MRhUqy%2BrBSJw%3D",
      "aweme_count": 351,
      "follower_count": 1404604,
      "favoriting_count": 1121,
      "total_favorited": 12353932,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }, {
      "id": "6692395146128589826",
      "region": "JP",
      "sec_uid": "MS4wLjABAAAAtavTmHYF26Ja8bA5uOx9axGumONjGfkCflrOu0Hec4iRa6T9WR1ZaR-4Sj_0L2RN",
      "unique_id": "mi_030616",
      "nickname": "みｰ．⚠️反転．ピアス⚠️",
      "signature": "ただの趣味垢\nTwitterに住んでます",
      "avatar": "https://p77-sign-sg.tiktokcdn.com/tiktok-obj/9302bb57c71286126af3418752a47773~c5_300x300.webp?x-expires=1639742400&x-signature=Txoa6RS1vT5j8jBZxsOD%2B25GEzA%3D",
      "aweme_count": 174,
      "follower_count": 72278,
      "favoriting_count": 12895,
      "total_favorited": 2596014,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "mi_030616",
      "twitter_id": "1244569405922500610"
    }],
    "total": 262,
    "time": 1636154865,
    "hasMore": true
  }
}
```

</details>

# 获取粉丝列表

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/user/followers```

### 请求方式：```get|post```

### 参数

```
user_id - 例 6943972350728700930
count - 1 ~ 200 默认 50
time -  hasMore为真时，传入time加载下一页内容
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "followers": [{
      "id": "6855595320790729733",
      "region": "ES",
      "sec_uid": "MS4wLjABAAAACuAvUV44m5Y0vSinq0M74_8h7YaCqAinZIVHVAqAis47mBOais71J3bDMF50qBVE",
      "unique_id": "lvilla97",
      "nickname": "Lvilla97",
      "signature": "",
      "avatar": "https://p77-sign-va.tiktokcdn.com/musically-maliva-obj/1594805258216454~c5_300x300.webp?x-expires=1639742400&x-signature=osOmDQWdz06hyF5%2BqmncKjvrEqQ%3D",
      "aweme_count": 0,
      "follower_count": 251,
      "favoriting_count": 912,
      "total_favorited": 0,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }, {
      "id": "7040005798647481350",
      "region": "MX",
      "sec_uid": "MS4wLjABAAAAS0rTw7JaFwtC_saKedK5mAz-iFCG7qcZoemEA4tsDUNEhA-25viTJTsm9dm1gycl",
      "unique_id": "sid90693",
      "nickname": "victor9069",
      "signature": "",
      "avatar": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1594805258216454~c5_300x300.webp?x-expires=1639742400&x-signature=i0LPE4cNks5ZGj0Wqk9f5fi4L3g%3D",
      "aweme_count": 0,
      "follower_count": 0,
      "favoriting_count": 0,
      "total_favorited": 0,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }, {
      "id": "6581397055238029313",
      "region": "KH",
      "sec_uid": "MS4wLjABAAAAvfbRcWHIdDLM87XeKvt62Xm3VCa3iI8UHhH_OyPvAheW-WoDBmPsn-GJn7FONTd-",
      "unique_id": "conscience184",
      "nickname": "មនុស្សឈឺចាប់ជាងគេ គឺបង",
      "signature": "",
      "avatar": "https://p77-sign-sg.tiktokcdn.com/tiktok-obj/1606787272401921~c5_300x300.webp?x-expires=1639742400&x-signature=x7%2BdsNKfZZhIuFncfyF3QyMBfw4%3D",
      "aweme_count": 0,
      "follower_count": 76,
      "favoriting_count": 3999,
      "total_favorited": 0,
      "youtube_channel_title": "",
      "youtube_channel_id": "",
      "twitter_name": "",
      "twitter_id": ""
    }],
    "total": 208468,
    "time": 1639657693,
    "hasMore": true
  }
}
```

</details>


# 获取音乐内视频列表

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/music/posts```

### 请求方式：```get|post```

### 参数

```
music_id - 音乐id (music_info.id) 例 6788770563495185158
count - 10 (最小1 最大35) 获取数量
cursor - 0 (hasMore为true时，可传入上次请求返回的cursor加载更多)
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "videos": [{
      "video_id": "6788814073657167110",
      "region": "SE",
      "title": "Hehe",
      "cover": "https://p16-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/1655cf144c9742cf8021f4dc8335c577_1580643957?x-expires=1639767600&x-signature=Bx%2BcjMHwlOoAtBt5yO9rEBY6POA%3D",
      "origin_cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/c688071120e74ba2b3d9ee4b4d9317e2_1580643957~tplv-tiktokx-360p.image?x-expires=1639767600&x-signature=lQ4I82DeylhFwECt439E8rEo%2B1w%3D",
      "play": "https://v16m-default.akamaized.net/e495e6a7541a3003fa17e30f23802f5d/61bce9ab/video/tos/useast2a/tos-useast2a-ve-0068c002/e25a59218514484e8054d8ff999e773f/?a=0&br=1276&bt=638&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am05d2hpc29lcjMzNDczM0ApMzQ7NGRoM2Q8Nzc4ODc2OGdlYzJtcWgyYG9fLS1jMTZzczU0NTVhLjMxY15eXzA0YmI6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/5dafffef63b9f4eabf805a45f3023d0a/61bce9ab/video/tos/useast2a/tos-useast2a-ve-0068c002/7112c4dc9dd14cb59fcba0801f5b7ee9/?a=0&br=726&bt=363&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am05d2hpc29lcjMzNDczM0ApNzNpOWg4OjszNzU0OjM3ZGdlYzJtcWgyYG9fLS1jMTZzcy4yYzVjLjItMy4wYGBgMV86Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/1657416601829430.mp3",
      "play_count": 137686,
      "digg_count": 5691,
      "comment_count": 51,
      "create_time": 1580643953,
      "author": {
        "id": "6659735884131401734",
        "unique_id": "swe._.amy",
        "nickname": "𝚛𝚘𝚋𝚕𝚘𝚡<33",
        "avatar": "https://p16-sign-va.tiktokcdn.com/tos-maliva-avt-0068/34f9971cce7ca50e1b5bd57dc5a79d40~c5_300x300.webp?x-expires=1639832400&x-signature=EAmujxGhNjfirsvr0FFer8RthwQ%3D"
      }
    }, {
      "video_id": "6995362373791911170",
      "region": "JP",
      "title": "腕からいく派です✳︎",
      "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/a35823938949452a8d00eb7e6db1cf0c_1628734740?x-expires=1639767600&x-signature=%2BJAimNVw%2BmA2YC5cvZzGxuLmO2w%3D",
      "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/3b2a877f3c85406ea515154c88953558_1628734728~tplv-tiktokx-360p.jpeg?x-expires=1639767600&x-signature=mqx4sxJqJ76JQvPtv8DhX1DF9BU%3D",
      "play": "https://v16m-default.akamaized.net/0633bf70afa039a8f0899f82d5c8dc74/61bce9ab/video/tos/alisg/tos-alisg-pve-0037/e1580b563bae4005afe785f280f29f93/?a=0&br=3760&bt=1880&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=Mzp0dDY6Zjw7NzMzODgzNEApOzw0M2g3ZTw6Nzg0PGg7aWcwczFrcjRfNl5gLS1kLy1zc2FeYTJgXzJhYTBiYjBhLTU6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/3620638c99e71b41edd795d8bd47d855/61bce9ab/video/tos/alisg/tos-alisg-pve-0037/9d991ef7a70447a0b9274792cd116b37/?a=0&br=2396&bt=1198&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=Mzp0dDY6Zjw7NzMzODgzNEApNTw4NDo1OjxnNzxpODo4aWcwczFrcjRfNl5gLS1kLy1zczJiLy0yMjAxL14vMWMyMWI6Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/1657416601829430.mp3",
      "play_count": 14702719,
      "digg_count": 843921,
      "comment_count": 6675,
      "create_time": 1628734727,
      "author": {
        "id": "6986471312684844034",
        "unique_id": "hinamin_0529",
        "nickname": "ひなみん🍑(21)",
        "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/e304975e9dd373f98cb0ff332190cee8~c5_300x300.webp?x-expires=1639832400&x-signature=VH7AiAnL68quVx5lzjkFffWI8do%3D"
      }
    }, {
      "video_id": "6820945347309767942",
      "region": "US",
      "title": "I finally got it! 🤗 #happyathome #foryou #fy",
      "cover": "https://p16-sign-va.tiktokcdn.com/obj/tos-maliva-p-0068/3ab8e60dbb8a484d887dfa050a776ea4_1588125100?x-expires=1639767600&x-signature=Qs1%2FAXu3vOfM%2BKiA6ZiYsXs32Cs%3D",
      "origin_cover": "https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/744bbdd2e8be45168c990a0dbf7d7ee1_1588125100~tplv-tiktokx-360p.image?x-expires=1639767600&x-signature=zW9uKO3qUQ7RWo6IizHDMaPc9uA%3D",
      "play": "https://v16m-default.akamaized.net/2f87666412dea47af4d5332c509513b3/61bce9a8/video/tos/useast2a/tos-useast2a-pve-0068/742f5129add94c2e902ebbdc8c5c95bd/?a=0&br=2548&bt=1274&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am83OWw1OjxndDMzNTczM0ApZzo0OTlnOjwzN2k0NDQ1aWdscmlvLjFjb2hfLS0wMTZzczM1YzQzLmEwNDY1YzU2MDY6Yw%3D%3D&vl=&vr=",
      "wmplay": "https://v16m-default.akamaized.net/5e9aed25ec8edcb9ffa2bfda3940e718/61bce9a8/video/tos/useast2a/tos-useast2a-pve-0068/d656fbf43fa645eda58328f11e273d8f/?a=0&br=1960&bt=980&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211217134850010245243136263B3375&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=am83OWw1OjxndDMzNTczM0ApNjY4aGU2Ojs8NzhpMzM6OWdscmlvLjFjb2hfLS0wMTZzczRgMy8tLS81LS0uLmIvMWE6Yw%3D%3D&vl=&vr=",
      "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/1657416601829430.mp3",
      "play_count": 2960289,
      "digg_count": 353810,
      "comment_count": 1663,
      "create_time": 1588125098,
      "author": {
        "id": "234640647603769344",
        "unique_id": "ashleynocera",
        "nickname": "Ashley Nocera",
        "avatar": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1659345919372293~c5_300x300.webp?x-expires=1639832400&x-signature=OI8UuVs9H42R1SLiDqC%2FJn3SJ6c%3D"
      }
    }],
    "cursor": "3",
    "hasMore": true
  }
}
```

</details>

# 获取音乐详情

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/music/info```

### 请求方式：```get|post```

### 参数

```
url - 音乐地址 支持（6788770563495185158 | https://vm.tiktok.com/xxxxxx/ | https://www.tiktok.com/music/originalljud-6788770563495185158）等多种链接格式
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "id": "6788770563495185158",
    "title": "originalljud",
    "play": "https://sf16-ies-music-va.tiktokcdn.com/obj/musically-maliva-obj/1657416601829430.mp3",
    "cover": "https://p77-sign-va.tiktokcdn.com/tos-maliva-avt-0068/34f9971cce7ca50e1b5bd57dc5a79d40~c5_720x720.jpeg?x-expires=1640070000&x-signature=cwpN%2ByqfgNtYN6tQHlDGhrgprQ8%3D",
    "author": "𝚛𝚘𝚋𝚕𝚘𝚡<33",
    "original": true,
    "duration": 9,
    "album": ""
  }
}
```

</details>


# 获取国家代码列表

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/region```

### 请求方式：```get|post```

### 参数

```
无
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "TW": "Taiwan",
    "JP": "Japan",
    "KR": "Korea",
    "US": "United States",
    "...": "..."
  }
}
```

</details>


# 获取任意国家热门视频

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/feed/list```

### 请求方式：```get|post```

### 参数

```
region - 地区代码 如(JP TW US)
count - 数量 1 ~ 20 默认10 (实际获取数量可能会比count少，因地区而异)
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": [{
    "video_id": "7038251244372135170",
    "region": "JP",
    "title": "superhuman feat.超人技 #funny #funnyvideo #comedy #challenge#comedia #respect #reproduction #remix IB:@uespiiiii.1115",
    "cover": "https://p16-sign-sg.tiktokcdn.com/large/tos-alisg-p-0037/cddfb3056acb477d86434f2bc73865e1_1638720570.jpeg?x-expires=1640005200&x-signature=xH3MoJlFdDhI4TOkWBz0kt%2FLbUE%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/81ebea9dcf1f422cb5dd7ae3a877c47c_1638720569~tplv-tiktokx-360p.jpeg?x-expires=1640005200&x-signature=FHV7Kb8P9IFJzYiy7Ly9GAhufWA%3D",
    "play": "https://v16m-default.akamaized.net/9086c2ee0708c2e63e253aca37b41bef/61c08a71/video/tos/alisg/tos-alisg-pve-0037/cdd690ce1036425ea6892a74713e0969/?a=1128&br=2290&bt=1145&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=amk5ODU6ZmZoOTMzODgzNEApOThoNjY6Mzw5N2U0OTU5PGcpaHV2bmQxcm53ZmhpMS1yNGc1amAtLWQvLXNzLjM0MDIyYC5gXl4zNDQ1MDpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/d435666d5e4a1185ab8d97838fa9c6ed/61c08a71/video/tos/alisg/tos-alisg-pve-0037/6a797e4563b5443e81d9e0083a35647d/?a=1128&br=1876&bt=938&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=amk5ODU6ZmZoOTMzODgzNEApNWY5NzY0OWQ2N2lpODo1Z2cpaHV2bmQxcm53ZmhpMS1yNGc1amAtLWQvLXNzMjAwLzJjNGA2Ly4yX15iYDpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "music": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7022247991247457026.mp3",
    "music_info": {
      "id": "7022248003805137665",
      "title": "original sound - ISSEI/将来有名になる男",
      "play": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7022247991247457026.mp3",
      "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tiktok-obj/1630967737620481.webp?x-expires=1640070000&x-signature=%2B%2FztmKsiVsuyNSnznB6KS8apopc%3D",
      "author": "ISSEI/将来有名になる男",
      "original": true,
      "duration": 27,
      "album": ""
    },
    "play_count": 2043045,
    "digg_count": 160518,
    "comment_count": 281,
    "create_time": 1638720568,
    "author": {
      "id": "72416538129",
      "unique_id": "issei0806",
      "nickname": "ISSEI/将来有名になる男",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tiktok-obj/1630967737620481~c5_300x300.webp?x-expires=1640070000&x-signature=lYAIn6rhaayRLSNoQomm1zjSQoQ%3D"
    }
  }, {
    "video_id": "7028914159936867586",
    "region": "JP",
    "title": "",
    "cover": "https://p16-sign-sg.tiktokcdn.com/large/tos-alisg-p-0037/f6277ce9dc674495b471cc9622eb7902.jpeg?x-expires=1640005200&x-signature=jiVnt%2ByKU90pB62IPccYI84aD1Q%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/6b42b9d1f5c84856930aa43d6cb20967_1636546610~tplv-tiktokx-360p.jpeg?x-expires=1640005200&x-signature=DhBJajPdIh85GbT0LVcZLcsGSBA%3D",
    "play": "https://v16m-default.akamaized.net/fe4ae61c57c98b7cac6e371bbb55b266/61c08a69/video/tos/alisg/tos-alisg-pve-0037c001/801316b174e14321b475f59d6b4d1abd/?a=1128&br=3134&bt=1567&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M2dqaWg6ZmV1OTMzODczNEApMzQ2NGVpOmRlNztpN2k6OGcpaHV2bmQxcm53Zi5jbXNyNGdkMmAtLWQxLXNzMTU2LjNgYTBeYV40L2JfXzpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/57ebfcb2099da4b3b1c877b9b7fac4ea/61c08a69/video/tos/alisg/tos-alisg-pve-0037c001/a8dd33bcbc37498196209b4241848966/?a=1128&br=2796&bt=1398&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=M2dqaWg6ZmV1OTMzODczNEApOTNnOjVlNTxlNzM2Zjk2O2cpaHV2bmQxcm53Zi5jbXNyNGdkMmAtLWQxLXNzYDUxNjEzMTQuYjRhY18uYDpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "music": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7025889719040871169.mp3",
    "music_info": {
      "id": "7025889690838469378",
      "title": "Bilang Pa Mama Mantu",
      "play": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7025889719040871169.mp3",
      "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/2b9eccac2e23c194f568bf483d8c0f06.webp?x-expires=1640070000&x-signature=1JTV9lK%2F32PluOPIYgzOmgxbTSc%3D",
      "author": "Nusantarahouse",
      "original": true,
      "duration": 20,
      "album": ""
    },
    "play_count": 270340,
    "digg_count": 31001,
    "comment_count": 211,
    "create_time": 1636546609,
    "author": {
      "id": "270898760635813888",
      "unique_id": "readhevaaa",
      "nickname": "🤍",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/c3f2882d18dc16dbe75e92ac176cc430~c5_300x300.webp?x-expires=1640070000&x-signature=ahtupdx%2FxWga%2FKz1Z1XfRYppEnA%3D"
    }
  }, {
    "video_id": "7032215126509882625",
    "region": "JP",
    "title": "本当に可愛すぎる🤦‍♀️#石原さとみ",
    "cover": "https://p16-sign-sg.tiktokcdn.com/large/tos-alisg-p-0037/bc248ce8da1b4ce3958bdf434c20cd84.jpeg?x-expires=1640005200&x-signature=HMK0O1vzxOYetuhVFOtui573hEA%3D",
    "origin_cover": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/4d015ffabaa44e659cfc7fc90d63e66c_1637315176~tplv-tiktokx-360p.jpeg?x-expires=1640005200&x-signature=%2BM7GiqnSI5Lbu0PzE8wWOHIn%2Bmw%3D",
    "play": "https://v16m-default.akamaized.net/826e08c00ad996447810b20b718ae508/61c08a74/video/tos/alisg/tos-alisg-pve-0037/75a38c99cf3244f5882bc0bb9921e873/?a=1128&br=2256&bt=1128&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=anQ2bTk6ZnJxOTMzODgzNEApaWkzOTU7ZmU3Nzs5PDhlPGcpaHV2bmQxcm53ZjIzYG9yNG8xX2AtLWQvLXNzNjEyNTY0MzEwNV40NC8yMzpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/e81cb0a212de982d3197bb73229e6a27/61c08a74/video/tos/alisg/tos-alisg-pve-0037/5bc571d4c5a04d5d87e6483a81138b0d/?a=1128&br=1986&bt=993&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=2021122007512101022312104609005985&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=anQ2bTk6ZnJxOTMzODgzNEApZDc6Z2U2Nzs8N2U6Omg8OGcpaHV2bmQxcm53ZjIzYG9yNG8xX2AtLWQvLXNzMl4xXzFgNS1fNmEwY2ItYTpjb3NiK2BtaHFmOg%3D%3D&vl=&vr=",
    "music": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7032215039738137345.mp3",
    "music_info": {
      "id": "7032215067965917953",
      "title": "original sound - 💗💗💗",
      "play": "https://sf-tk-sg.ibytedtos.com/obj/tiktok-obj/7032215039738137345.mp3",
      "cover": "https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/c49ff301fdf9ea96dad0523ee43781bb.webp?x-expires=1640070000&x-signature=5%2Fl0q%2BEypMxe8vqrVhEZWbVw2KQ%3D",
      "author": "💗💗💗",
      "original": true,
      "duration": 26,
      "album": ""
    },
    "play_count": 1451374,
    "digg_count": 113319,
    "comment_count": 219,
    "create_time": 1637315175,
    "author": {
      "id": "6998514701470565378",
      "unique_id": "aaa_4521",
      "nickname": "💗💗💗",
      "avatar": "https://p16-sign-sg.tiktokcdn.com/tos-alisg-avt-0068/c49ff301fdf9ea96dad0523ee43781bb~c5_300x300.webp?x-expires=1640070000&x-signature=p0VWt3HmNL2t6l0%2F%2BN2N2EqVEu8%3D"
    }
  }]
}
```

</details>


# 获取视频评论列表

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/comment/list```

### 请求方式：```get|post```

### 参数

```
url - 可以传入视频id or 链接 or 短链等
count - 数量 1 ~ 50 默认20
cursor - 传入上次请求返回的cursor加载下一页，默认0
```

### 返回结果：Json

#### reply_total代表该评论的回复数

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "comments": [{
      "id": "7044622953448211247",
      "text": "yall pierce your kids ears and get them circumcised at birth bye😭",
      "create_time": 1640204108,
      "digg_count": 3688,
      "reply_total": 106,
      "user": {
        "id": "6942236779949032453",
        "region": "US",
        "sec_uid": "MS4wLjABAAAAQr0Qu43Lo4LergoL419TiYfdjejBXW1QWRxB3O-933b5pcpp9bXf6YE_Si9qH4mJ",
        "unique_id": "ogscarlettt",
        "nickname": "scarlett🦦",
        "signature": "7teen👺",
        "avatar": "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1594805258216454~c5_300x300.webp?x-expires=1640329200&x-signature=YfOn7%2B%2FACh1IgB18qtP7KLz3PV8%3D",
        "aweme_count": 0,
        "follower_count": 0,
        "favoriting_count": 0,
        "total_favorited": 0,
        "youtube_channel_title": "",
        "youtube_channel_id": "",
        "twitter_name": "",
        "twitter_id": ""
      },
      "status": 1
    }],
    "total": 4111,
    "cursor": 1,
    "hasMore": true
  }
}
```

</details>



# 获取评论回复列表

<details>
<summary>点击查看</summary>

### 接口地址：```https://www.tikwm.com/api/comment/reply```

### 请求方式：```get|post```

### 参数

```
comment_id - 评论id
count - 数量 1 ~ 50 默认20
cursor - 传入上次请求返回的cursor加载下一页，默认0
```

### 返回结果：Json

```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "comments": [{
      "id": "7044645747689915142",
      "text": "I have a cane corso kennel. people don't realize how bad their ears get infected without being cropped. also their tales hurt you and them. lol",
      "create_time": 1640209408,
      "digg_count": 123,
      "user": {
        "id": "6905361194452091910",
        "region": "US",
        "sec_uid": "MS4wLjABAAAAG9Nliqj6TwTciapx2TZUVPg8O0LOS2GRlGnaYBn3hVVwf52hB0c3pmOsC5iyzixw",
        "unique_id": "candcsmommabeth",
        "nickname": "user9848869460800",
        "signature": "",
        "avatar": "https://p77-sign-va.tiktokcdn.com/tos-maliva-avt-0068/b22a53d00812e9e3738a065c000ff3cd~c5_300x300.webp?x-expires=1640329200&x-signature=ho8FxcRlV04hlHl7PuNLPmFbnls%3D",
        "aweme_count": 0,
        "follower_count": 0,
        "favoriting_count": 0,
        "total_favorited": 0,
        "youtube_channel_title": "",
        "youtube_channel_id": "",
        "twitter_name": "",
        "twitter_id": ""
      },
      "status": 1
    }],
    "total": 107,
    "cursor": 1,
    "hasMore": true
  }
}
```

</details>
