<?php

namespace app\core;

use app\core\db\Database;
use app\core\db\DbModel;

class Application
{
    public static string $ROOT_DIR;

    public string $adminLayout = 'dashboard';
    public string $layout = 'main';
    public string $userClass;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Controller $controller;
    public Database $db;
    public ?UserModel $user;
    public View $view;

    public static Application $app;
    public function __construct($rootPath, array $config)
    {
        $this->controller = new Controller();
        $this->userClass = $config['userClass'];
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);
        $this->view = new View();

        $this->db = new Database($config['db']);

        $primaryValue = $this->session->get('user');
        if ($primaryValue) {
            $instance = new $this->userClass;
            $primaryKey = $instance->primaryKey();
            $this->user = $instance->findOne([$primaryKey => $primaryValue]);
        } else {
            $this->user = null;
        }
    }

    public static function isGuest()
    {
        return !self::$app->user;
    }

    public function run()
    {
        $uri = $this->request->getPath();

        if(strpos($uri, '/backend') === 0) {
            $this->handleBackendRequest($uri);
        } else {
            $this->handleAppRequest();
        }
    }

    public function login(UserModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }

    private function handleBackendRequest($uri)
    {
        $parts = explode('/', $uri);
        $controllerName = !empty($parts[2]) ? $parts[2] . 'Controller' : 'AdminController';
        $actionName = !empty($parts[3]) ? $parts[3] : 'run';

        // Create the controller instance
        $controllerClass = '\\Backend\\Controllers\\' . $controllerName;
        $controller = new $controllerClass();

        // Call the action
        $controller->$actionName();

    }

    private function handleAppRequest()
    {
        try{
            echo $this->router->resolve();
        } catch (\Exception $e) {
            $this->response->setStatusCode($e->getCode());
            echo $this->view->renderView('_error', [
                'exception' => $e
            ]);
        }
    }
}