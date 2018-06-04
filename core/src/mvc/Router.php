<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/4
 * Time: 18:08
 */

namespace L\Mvc;

use Phalcon\Mvc\Router as PhalconRouter;

class Router extends PhalconRouter
{
    public function __construct(bool $defaultRoutes = true)
    {
        parent::__construct($defaultRoutes);

        /**
         * 清除默认的路由与/
         */
        $this->clear();
        $this->removeExtraSlashes(true);
    }

    public function add($pattern, $paths = null, $httpMethods = null, $position = parent::POSITION_LAST)
    {
        return parent::add($pattern, $paths, $httpMethods, $position);
    }

    public function get($pattern, $paths = null, $position = parent::POSITION_LAST)
    {
        return $this->add($pattern, $paths, ['GET'], $position);
    }

    public function post($pattern, $paths = null, $position = parent::POSITION_LAST)
    {
        return $this->add($pattern, $paths, ['POST'], $position);
    }


    public function put($pattern, $paths = null, $position = parent::POSITION_LAST)
    {
        return $this->add($pattern, $paths, ['PUT'], $position);
    }


    public function delete($pattern, $paths = null, $position = parent::POSITION_LAST)
    {
        return $this->add($pattern, $paths, ['DELETE'], $position);
    }

    public function match($pattern, $paths = null, $httpMethods = null, $position = parent::POSITION_LAST)
    {
        return $this->add($pattern, $paths, $httpMethods, $position);
    }

    public function any($pattern, $paths = null, $position = parent::POSITION_LAST)
    {
        return $this->add($pattern, $paths, null, $position);
    }
}