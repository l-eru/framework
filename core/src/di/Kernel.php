<?php
namespace L\Di;

use L\Di\Services\ServiceInterface;
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

    /**
     * 加载系统需要的服务
     */
    private function bootstrap(): void
    {
        $services = config('app.services', []);

        foreach ($services as $serviceName => $className) {
            $service = new $className();

            if ($service instanceof ServiceInterface) {
                $this->set($serviceName, function () use ($service) {
                    return $service->boot();
                }, $service->isShared());
            }
        }
    }
}