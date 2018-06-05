<?php
namespace L\Di\services;

use L\Mvc\Router;
use Phalcon\Events\Manager;

class RouterService extends Services
{
    public function boot()
    {
        $router = new Router();

        $routesPath = dir(app_path('routes'));

        $router->notFound([
            'namespace' => 'L\Mvc',
            'controller' => 'error',
            'action' => 'notFound'
        ]);

        while ($path = $routesPath->read()) {
            if ($path !== '..' && $path !== '.') include $routesPath->path . DIRECTORY_SEPARATOR . $path;
        }


        /*$eventsManager = new Manager();
        $eventsManager->attach('router', function ($events, Router $router) {
            dump($events->getType());
            //dump($router->getRoutes());
            //dump($router->getMatches());

            dump($router->getControllerName());
            dump($router->getRewriteUri());

            return true;
        });

        $router->setEventsManager($eventsManager);*/


        return $router;
    }
}