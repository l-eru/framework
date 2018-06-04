<?php

use Phalcon\Mvc\Application;


require __DIR__ . '/../bootstrap/bootstrap.php';


$app = new Application();

$app->handle()->send();
