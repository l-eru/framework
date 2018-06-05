<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/4
 * Time: 18:28
 */


return [


    'debug' => env('APP_DEBUG', false),


    'namespace' => env('APP_NAMESPACE', 'ErrorController\Controller'),



    /**
     * system service
     *
     * 'serviceName' => 'serviceClassName'
     *
     * serviceClass must be instance of \L\Di\Services\ServiceInterface or extends \L\Di\Services\Services
     * you can use $this->serviceName to access the serviceClass in Controller
     */
    'services' => [
        'db' => \L\Di\services\DbService::class,
        'view' => \L\Di\services\ViewService::class,
        'dispatcher' => \L\Di\services\DispatcherService::class,
        'router' => \L\Di\services\RouterService::class
    ],

    /**
     * attach events to services
     */
    'events' => [

    ],
];