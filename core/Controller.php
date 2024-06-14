<?php

namespace app\core;

use app\core\middlewares\BaseMiddleware;

class Controller
{
    public string $adminLayout = 'dashboard';
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \app\core\middlewares\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params= [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function renderAdmin($view, $params= [])
    {
        return Application::$app->view->renderAdminDashboard($view, $params);
    }

    public function registerMiddleWare(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }


}