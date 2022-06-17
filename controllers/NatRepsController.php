<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\User;
use app\models\NatRep;

class NatRepsController extends Controller
{
    //get data to display
    public function responsiblesList()
    {
        $responsible = new NatRep();
        if ($responsible->getAll()){

            $responsibles = $responsible->dataList;
            $this->setLayout('dashboard');
            return $this->render('national-rep', [
                'responsibles' => $responsibles,
            ]);
        }
    }

    public function update(Request $request)
    {
        $responsible = new NatRep();
        if ($request->isGet()){
            $responsible->loadData($request->getBody());
            $responsible->findOne($responsible->id);
            $responsible = $responsible->dataList[0];
            $this->setLayout('dashboard');
            return $this->render('update-resp', [
                'responsible' => $responsible,
            ]);
        }
        if($request->isPost())
        {
            $responsible->loadData($request->getBody());
            if ($responsible->update($responsible->id)){
                Application::$app->session->setFlash('success', 'Thanks for updating Event');
                Application::$app->response->redirect('national-rep');
            }
            return $this->render('update-resp', [
                'responsible' => $responsible
            ]);
        }

        return $this->render('update-event', [
            'responsible' => $responsible
        ]);
    }

    //add new national representative
    public function add(Request $request)
    {
        $addModel = new NatRep();
        if ($request->getMethod() === 'post') {
            $addModel->loadData($request->getBody());
            if ($addModel->validate() && $addModel->save()) {
                Application::$app->session->setFlash('success', 'responsible added');
                Application::$app->response->redirect('/national-rep');
                return 'Show success page';
            }
        }
        $this->setLayout('dashboard');
        return $this->render('add-resp', []);
    }


    public function delete(Request $request)
    {
        $event = new NatRep();

        if ($request->isPost()){
            $event->loadData($request->getBody());
            if ($event->delete($event->id)){
                Application::$app->session->setFlash('success', 'has successfully deleted');
                Application::$app->response->redirect('national-rep');
            }
        }
    }

}