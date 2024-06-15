<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\db\DbModel;
use app\core\Request;
use app\core\Response;
use app\models\category;
use app\models\ContactForm;

class SiteController extends Controller
{
    public function home()
    {
        $categories = new category();

        $params = [
            'categories' => $categories->fetchAll()
        ];
        return $this->render('home', $params);
    }
    public function contact(Request $request, Response $response)
    {
        $contact = new ContactForm();
        if ($request->isPost()) {
            $contact->loadData($request->getBody());
            if ($contact->validate() && $contact->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $response->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
}