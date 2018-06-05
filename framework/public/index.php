<?php


require __DIR__ . '/../bootstrap/bootstrap.php';


try {
    $app->handle($_SERVER['REQUEST_URI'])->send();
} catch (Exception $e) {
    echo $e->getMessage();
}
