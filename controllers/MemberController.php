<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\Member;

class MemberController extends Controller
{
    //get data to display
    public function memberList()
    {
        $member = new Member();
        if ($member->getAll()){
            $members = $member->dataList;
            $this->setLayout('dashboard');
            return $this->render('members', [
                'members' => $members,
            ]);
        }
    }


    //add new member
    public function add(Request $request)
    {
        $registerModel = new Member();
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
        $event = new Member();

        if ($request->isPost()){
            $event->loadData($request->getBody());
            if ($event->delete($event->id)){
                Application::$app->session->setFlash('success', 'has successfully deleted');
                Application::$app->response->redirect('members');
            }
        }
    }

}