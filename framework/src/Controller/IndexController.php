<?php
/**
 * Created by PhpStorm.
 * User: l-eru
 * Date: 2018/6/5
 * Time: 9:08
 */

namespace App\Controller;

use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->response->setJsonContent([111]);
    }

    public function nextAction()
    {
        echo 444;
    }
}