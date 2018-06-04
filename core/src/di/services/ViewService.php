<?php
namespace di\services;

use L\Di\Services\Services;
use Phalcon\Mvc\View;

class ViewService extends Services
{
    public function boot()
    {
        $view = new View();

        return $view->disable();
    }
}