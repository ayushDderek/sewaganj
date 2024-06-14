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
        if ($request->isPost()){
            $service->loadData($request->getBody());
            if($service->validate() && $service->save()) {
                Application::$app->session->setFlash('success', 'Service added.');
                Application::$app->response->redirect('/admin/services');
            }
            return $this->renderAdmin('service', [
                'model' => $service,
            ]);
        }

        return $this->renderAdmin('service', [
            'model' => $service
        ]);
    }

    public function categoryServices(Request $request) {
        $category = new Category();
        $data = $category->fetchAll();
        if ($request->isPost()){

            $category->loadData($request->getBody());

            if($category->validate() && $category->save()) {

                Application::$app->session->setFlash('success', 'Category added.');
                Application::$app->response->redirect('/admin/services-category');
            }



            return $this->renderAdmin('category', [
                'model' => $category,
            ]);
        }
        return $this->renderAdmin('category', [
            'model' => $category,
            'all' => $data
        ]);
    }
}