<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/4
 * Time: 18:22
 */

namespace L\Mvc;

use Phalcon\Mvc\Controller;

class ErrorController extends Controller
{
    public function notFoundAction()
    {
        echo 333;
    }
}