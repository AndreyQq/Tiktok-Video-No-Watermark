# Tiktok-Video-No-Watermark

Tiktok短视频去水印

2021.12.1更新
+ 增加输出视频Music


### 在线测试：```https://www.tikwm.com/```

### 接口地址：```https://www.tikwm.com/api/```

### 请求方式：```post```

### 参数
```
plat - 平台（tik）

url - 短视频地址
```
### 返回结果：Json格式
```json
{
  "code": 0,
  "msg": "success",
  "data": {
    "title": "#hangi şarkılarla video atmamı isterdiniz 🇹🇷🐺#🐺🇹🇷🤘🐺🇹🇷🤘🐺🇹🇷🤘🐺🇹🇷 #gazimustafakemalataturk #yüksekova",
    "cover": "https://p16-sign-sg.tiktokcdn.com/obj/tos-alisg-p-0037/8c75c54aaa0f486cb6fe82d3e466cd11_1629038230?x-expires=1638360000&x-signature=mgq6ALsP4iAOiEpkhfAfcW9OMbw%3D",
    "play": "https://v16m-default.akamaized.net/072f9e06222db25ae88c10d5bdf13341/61a76702/video/tos/alisg/tos-alisg-pve-0037c001/098a42acd7874257961c7ec7ea77a4cc/?a=0&br=1788&bt=894&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=6&er=&ft=w.1R0FGgkag3-I&l=20211201061344010223019024073F5107&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=ajRocDk6ZjZsNzMzODczNEApZ2lnO2k1aWQ7Nzk4Zzk2ZGdkbm5ucjRvYWBgLS1kMS1zc2BjXy9iMTMwMDUzMTZeMmI6Yw%3D%3D&vl=&vr=",
    "wmplay": "https://v16m-default.akamaized.net/ca2806d559dba8f5243b4a8b11e54383/61a76702/video/tos/alisg/tos-alisg-pve-0037c001/433818c0e6eb4554a8dc70fa12f76373/?a=0&br=1706&bt=853&cd=0%7C0%7C0&ch=0&cr=0&cs=0&cv=1&dr=0&ds=3&er=&ft=w.1R0FGgkag3-I&l=20211201061344010223019024073F5107&lr=all&mime_type=video_mp4&net=0&pl=0&qs=0&rc=ajRocDk6ZjZsNzMzODczNEApaWZpNTNmZDs5N2Q0ZDo3M2dkbm5ucjRvYWBgLS1kMS1zc15fNS9gMl4vNmA2MmIwMmE6Yw%3D%3D&vl=&vr=",
    "music": "https://p16-va-default.akamaized.net/obj/musically-maliva-obj/6842547937583631110.mp3"
  }
}
```

### 暂不提供Tikwm源码
#### 如果它对你有帮助，请支持一个star。