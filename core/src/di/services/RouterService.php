<?php
namespace L\Di\services;

use L\Mvc\Router;

class RouterService extends Services
{
    public function boot()
    {
        $router = new Router();

        $routesPath = dir(app_path('routes'));

        while ($path = $routesPath->read()) {
            if ($path !== '..' && $path !== '.') include $path;
        }

        $router->removeExtraSlashes(true);

        return $router;
    }
}