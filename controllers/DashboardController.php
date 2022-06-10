<?php
/**
 * User: aslukili
 * Date: 7/8/2020
 * Time: 8:43 AM
 */

namespace app\controllers;


use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\User;
use app\models\Event;

/**
 * Class SiteController
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\controllers
 */
class DashboardController extends Controller
{
    public function events(Request $request)
    {
        $addModel = new Event();
        if ($request->getMethod() === 'post') {
            $addModel->loadData($request->getBody());
            if ($addModel->validate() && $addModel->save()) {
                Application::$app->session->setFlash('success', 'event added!');
                Application::$app->response->redirect('/events');
                return 'Show success page';
            }
        }
        $this->setLayout('dashboard');
        return $this->render('events', []);
    }


    public function dashboard()
    {
        $this->setLayout('dashboard');
        return $this->render('dashboard', []);
    }

    public function members()
    {
        $this->setLayout('dashboard');
        return $this->render('members', []);
    }

    public function nationalRep()
    {
        $this->setLayout('dashboard');
        return $this->render('national-rep', []);
    }
}