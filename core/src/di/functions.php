<?php

use Phalcon\Di;
use Phalcon\Config;
use Phalcon\Config\Adapter\Ini;

if (!function_exists('config')) {
    /**
     * 获取配置文件中的数据
     *
     * @param string $expr
     * @param null $default
     * @return mixed
     */
    function config(string $expr, $default = null)
    {
        if ('.' === substr($expr, -1)) {
            $expr = substr($expr, 0, -1);
        }

        $expr = explode('.', $expr);

        /**
         * @var Config $config
         */
        $config = Di::getDefault()->get('config');

        foreach ($expr as $value) {
            if ($config->get($value)) {
                $config = $config->get($value);
            } else {
                return $default;
            }
        }

        return $config;
    }
}

if (!function_exists('app_path')) {
    /**
     * 给传入路径添加绝对路径根目录并返回。不保证该路径存在。
     *
     * @param $path
     * @return string
     */
    function app_path(string $path = ''): string
    {
        return APP_PATH . DIRECTORY_SEPARATOR . $path;
    }
}


if (!function_exists('env')) {
    /**
     * 获取.env配置文件中的信息
     *
     * @param string $key
     * @param null|string $default
     * @return null|string
     */
    function env(string $key, ?string $default = null): ?string
    {
        static $properties = null;
        $key = strtoupper($key);

        if (!$properties && $envPath = realpath(app_path('.env'))) {
            $properties = new Ini($envPath);
        }

        return $default ?: $properties[$key];
    }
}

