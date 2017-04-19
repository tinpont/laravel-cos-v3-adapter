<?php

namespace Tinpont\LaravelQcloudCosV4\Qcloud;

class Conf {
    // Cos php sdk version number.
    const VERSION = 'v4.2.3';
    const API_COSAPI_END_POINT = 'http://region.file.myqcloud.com/files/v2/';

    // Please refer to http://console.qcloud.com/cos to fetch your app_id, secret_id and secret_key.
    private static $appId;
    private static $secretId;
    private static $secretKey;

    public static function setAppId($appId)
    {
        self::$appId = $appId;
    }

    public static function setSecretId($secretId)
    {
        self::$secretId = $secretId;
    }

    public static function setSecretKey($secretKey)
    {
        self::$secretKey = $secretKey;
    }

    public static function getAppId()
    {
        return self::$appId;
    }

    public static function getSecretId()
    {
        return self::$secretId;
    }

    public static function getSecretKey()
    {
        return self::$secretKey;
    }

    /**
     * Get the User-Agent string to send to COS server.
     */
    public static function getUserAgent() {
        return 'cos-php-sdk-' . self::VERSION;
    }
}