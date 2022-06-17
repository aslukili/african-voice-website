<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\User;

class UserController extends Controller
{
    //get data to display
    public function UserList()
    {
        $User = new User();
        if ($User->getAll()){
            $Users = $User->dataList;
            $this->setLayout('dashboard');
            return $this->render('Users', [
                'Users' => $Users,
            ]);
        }
    }


    //add new User
    public function add(Request $request)
    {
        $registerModel = new User();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'tanks for registering!');
                Application::$app->response->redirect('/login');
                return 'Show success page';
            }
        }
        $this->setLayout('auth');
//        echo '<pre>';
//        die(var_dump($registerModel));
        return $this->render('register', [
            'register' => $registerModel
        ]);
    }


    public function delete(Request $request)
    {
        $event = new User();

        if ($request->isPost()){
            $event->loadData($request->getBody());
            if ($event->delete($event->id)){
                Application::$app->session->setFlash('success', 'has successfully deleted');
                Application::$app->response->redirect('Users');
            }
        }
    }

}