# Tiktok-Video-No-Watermark

Tiktok短视频去水印

# 在线测试

[```https://www.tikwm.com/```](https://www.tikwm.com/)

# 更新日志

2021.12.14 更新

+ 增加 [获取用户发布的视频](#获取用户发布的视频) 接口 1 请求/10 秒([查看付费API](https://rapidapi.com/yi005/api/tiktok-video-no-watermark2/))

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
<summary>查看详细</summary>

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
<summary>查看详细</summary>
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

## <a href="https://www.buymeacoffee.com/yi005" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-blue.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

#### 如果它对你有帮助，请支持一个star。