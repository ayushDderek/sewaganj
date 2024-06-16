<?php

use app\controllers\AdminController;
use app\controllers\AuthController;
use app\controllers\ServiceController;
use app\core\Application;
use app\controllers\SiteController;

//define('BACKEND_PATH', dirname(__DIR__) . '/backend');

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dns' => $_ENV['DB_DNS'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];




$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'contact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/logout', [AuthController::class, 'logout']);
$app->router->get('/profile', [AuthController::class, 'profile']);
$app->router->get('/cleaning', [ServiceController::class, 'cleaningService']);
$app->router->post('/cleaning', [ServiceController::class, 'cleaningService']);
$app->router->get('/salon', [ServiceController::class, 'salonService']);
$app->router->get('/home-repair', [ServiceController::class, 'homeRepair']);
$app->router->get('/warehouse', [ServiceController::class, 'warehouse']);


$app->router->get('/admin', [AdminController::class, 'dashboard']);
$app->router->get('/admin/services', [AdminController::class, 'services']);
$app->router->post('/admin/services', [AdminController::class, 'services']);
$app->router->get('/admin/services-category', [AdminController::class, 'categoryServices']);
$app->router->post('/admin/services-category', [AdminController::class, 'categoryServices']);




$app->run();