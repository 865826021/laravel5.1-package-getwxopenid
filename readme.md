

### Laravel 5.1 微信JSAPI支付中获取openid

# 使用示例
### 生成openid参数示例代码

```
composer require yuxiaoyang/getwxopenid
```

或者在你的 `composer.json` 的 require 部分中添加:
```json
 "yuxiaoyang/getwxopenid": "~1.0"
```

下载完毕之后,直接配置 `config/app.php` 的 `providers`:

```php
//Illuminate\Hashing\HashServiceProvider::class,

Yuxiaoyang\GetwxOpenid\GetwxOpenidProvider::class,
```
控制器中使用 `WxpayController.php` :


```php

<?php


use \Yuxiaoyang\GetwxOpenid\GetwxOpenid;

class WxpayController extends Controller
{
    
    public $getwxopenid;

    //获取JSAPI openid
    public function getopenid()
    {
        //创建示例对象
        $this->getwxopenid = new GetwxOpenid();
        $data = $this->getwxopenid->getOpenid();
        return $data;
    }


}