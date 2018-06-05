<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/5
 * Time: 9:12
 */


/**
 * @var \L\Mvc\Router $router
 */
$router->get('/index', [
    'namespace' => 'App\Controller',
    'controller' => 'index',
    'action' => 'index'
]);


$router->any('/next', [
    'namespace' => 'App\Controller',
    'controller' => 'Index',
    'action' => 'next'
]);