<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/4
 * Time: 18:24
 */

namespace L\Di;


use Phalcon\Config;
use Phalcon\Di\FactoryDefault;

class Kernel extends FactoryDefault
{

    public function __construct(string $basePath)
    {
        parent::__construct();

        define('APP_PATH', rtrim($basePath, '\/'));

        $this->setConfig(APP_PATH . DIRECTORY_SEPARATOR . 'config');

        $this->bootstrap();

        // $this->registerVolt($config);
    }

    /**
     * 加载配置文件
     *
     * @param string $configDir
     */
    private function setConfig(string $configDir): void
    {
        $dir = dir($configDir);
        $config = new Config();
        while ($fileName = $dir->read()) {
            $pathName = $dir->path . DIRECTORY_SEPARATOR . $fileName;
            if (is_file($pathName)) {
                $config->merge(new Config([pathinfo($fileName, PATHINFO_FILENAME) => include $pathName]));
            }
        }

        $this->setShared('config', $config);
    }

    private function bootstrap(): void
    {
        
    }
}