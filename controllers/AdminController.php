<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\category;
use app\models\Service;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleWare(new AuthMiddleware(['profile']));
    }

    public function dashboard() {
        return $this->renderAdmin('dashboard');
    }

    public function services(Request $request) {
        $service = new Service();
        $category = new Category();
        if ($request->isPost()){
            $service->loadData($request->getBody());
            if($service->validate() && $service->save()) {
                Application::$app->session->setFlash('success', 'Service added.');
                Application::$app->response->redirect('/admin/services');
            }
            return $this->renderAdmin('service', [
                'model' => $service,
                'data' => $service->fetchAll(),
                'cat' => $category->fetchAll()
            ]);
        }

        return $this->renderAdmin('service', [
            'model' => $service,
            'data' => $service->fetchAll(),
            'cat' => $category->fetchAll()
        ]);
    }

    public function categoryServices(Request $request) {
        $category = new Category();
        if ($request->isPost()){

            $category->loadData($request->getBody());

            if($category->validate() && $category->save()) {

                Application::$app->session->setFlash('success', 'Category added.');
                Application::$app->response->redirect('/admin/services-category');
            }

            return $this->renderAdmin('category', [
                'model' => $category,
                'all' => $category->fetchAll()
            ]);
        }
        return $this->renderAdmin('category', [
            'model' => $category,
            'all' => $category->fetchAll()
        ]);
    }
}