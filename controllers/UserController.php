<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\Event;
use app\models\Participation;
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
            return $this->render('members', [
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

    public function profile()
    {
        $user = new User();
        $event = new Event();
        $participant = new Participation();
        $registeredEvent = $event->getOne(['id' => $participant->getOne(['user_fk' => Application::$app->user->getDisplayName()])->event_fk]);

        $userProfile = $user->getOne(['username' => Application::$app->user->getDisplayName()]);

        return $this->render('profile', [
            'user' => $userProfile,
            'event' => $registeredEvent
        ]);
    }


    public function delete(Request $request)
    {
        $event = new User();

        if ($request->isPost()){
            $event->loadData($request->getBody());
            if ($event->delete($event->id)){
                Application::$app->session->setFlash('success', 'has successfully deleted');
                Application::$app->response->redirect('members');
            }
        }
    }

}