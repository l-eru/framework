<?php
namespace L\Di\services;

use Phalcon\Db\Adapter\Pdo\Factory;

class DbService extends Services
{
    public function boot()
    {
        $dbConfig = config('database')->toArray();

        //unset($dbConfig['connections'][$dbConfig['default']]['prefix']);

        $dbConfig['connections'][$dbConfig['default']]['adapter'] = $dbConfig['default'];

        return Factory::load($dbConfig['connections'][$dbConfig['default']]);
    }
}