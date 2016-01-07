# laravel5-php-redis [![License](https://poser.pugx.org/overtrue/wechat/license)](https://github.com/hacklee/laravel5-php-redis)
在laravel中用外观模式操作php的redis扩展类

### 安装php的redis扩展

- 使用pecl安装

```
pecl install redis
```
- 由于pecl的版本不一定是最新的，可以clone源码安装

> phpredis扩展的github地址：[https://github.com/phpredis/phpredis][1]

### 此依赖读的redis配置跟laravel保持一样，在database.php中的redis节点

```
'redis' => [
        'default' => [
            'host' => '127.0.0.1',
            'port' => 6379,
        	'password' => '',
            'database' => 0,
        ],
    ]
```

### 使用步骤

- 使用composer加载依赖

```
composer require hacklee/laravel5-php-redis
```
> 或修改composer.json，在require加上 
> "hacklee/laravel5-php-redis": "dev-master"
> 然后执行composer update

- 在app.php的providers节点下增加以下代码

```
Hacklee\PRedisServiceProvider::class
```
或
```
'Hacklee\PRedisServiceProvider'
```

- 在app.php的aliases节点下增加以下代码

```
'PRedis' => Hacklee\PRedisFacade::class
```
或
```
'PRedis' => 'Hacklee\PRedisFacade'
```

### 使用示例

- 直接使用

```
$val = \PRedis::get('key');
```

- 或命名空间

```
use PRedis;

$val = PRedis::get('key');
```

**redis扩展的更多操作，请参考官网文档[phpredis][2]**


  [1]: https://github.com/phpredis/phpredis
  [2]: https://github.com/phpredis/phpredis
