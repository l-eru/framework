<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/4
 * Time: 18:22
 */

namespace L\Mvc;


use Phalcon\DiInterface;
use Phalcon\Mvc\Application;

class App extends Application
{
    public function __construct(DiInterface $dependencyInjector = null)
    {
        parent::__construct($dependencyInjector);
    }
}