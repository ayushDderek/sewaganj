<?php

namespace app\controllers;

use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->registerMiddleWare(new AuthMiddleware(['profile']));
    }

    public function dashboard() {
        return $this->renderAdmin('dashboard');
    }

    public function services() {
        return $this->renderAdmin('services');
    }

    public function servicesCategory(Request $request) {
        if ($request->isPost()){
            print_r($_POST);
            die;
        }
        return $this->renderAdmin('category');
    }
}