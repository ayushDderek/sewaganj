<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Service;

class ServiceController extends Controller
{
    public function cleaningService()
    {
        $services = new Service();
        if(isset($_POST['num1']))
        {

            $output = ($_POST['num1']+$_POST['num2']) ?? '';
            echo $output; exit;
        }
        return $this->render('cleaning_service', [
            'cleaningServices' => $services->fetchAll()
        ]);

    }

    public function salonService()
    {
        return $this->render('salon_service');
    }

    public function homeRepair()
    {
        return $this->render('home-repair-services');
    }

    public function warehouse()
    {
        return $this->render('warehouse');
    }

    public function cart()
    {
        $data = json_decode(file_get_contents("php://input"), true);
    }
}