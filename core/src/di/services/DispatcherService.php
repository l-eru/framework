<?php
namespace L\Di\services;

use Phalcon\Mvc\Dispatcher;

class DispatcherService extends Services
{
    public function boot()
    {
        $dispatcher = new Dispatcher();

        $dispatcher->setDefaultNamespace(config('app.namespace'));

        return $dispatcher;
    }
}