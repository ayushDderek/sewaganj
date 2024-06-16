<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Service;

class ServiceController extends Controller
{
    public function cleaningService()
    {
        $services = new Service();
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
}