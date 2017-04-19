# laravel-cos-v4-adapter

Tencent Qcloud COS V4 Adapter for Laravel

腾讯云COS对象存储V4 for Laravel 5

## 安装

  ```shell
  composer require "tinpont/laravel-cos-v4-adapter"
  ```

## 配置

1. 在 `config/app.php` 中注册 `ServiceProvider`:

  ```php
  Tinpont\LaravelQcloudCosV4\ServiceProvider::class,
  ```

2. 在 `config/filesystems.php` 中配置:

  ```php
  'disks' => [
      'cosv4' => [
          'driver' => 'cosv4',
          'region' => env('COSV4_REGION', 'gz'),
          'protocol' => env('COSV4_PROTOCOL', 'http'),
          'domain' => env('COSV4_DOMAIN'),
          'app_id' => env('COSV4_APP_ID'),
          'secret_id' => env('COSV4_SECRET_ID'),
          'secret_key' => env('COSV4_SECRET_KEY'),
          'timeout' => env('COSV4_TIMEOUT', 60),
          'bucket' => env('COSV4_BUCKET'),
      ],
  ],
  ```
