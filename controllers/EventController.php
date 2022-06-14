<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\core\Response;
use app\models\Member;
use app\models\Event;

class EventController extends Controller
{
    //get data to display
    public function eventList()
    {
        $event = new Event();
        if ($event->getAll()){
            $events = $event->dataList;
            $this->setLayout('dashboard');
            return $this->render('manage-events', [
                'events' => $events,
            ]);
        }
    }

    public function update(Request $request)
    {
        $event = new Event();
        if ($request->isGet()){
            $event->loadData($request->getBody());
            $event->findOne($event->id);
            $event = $event->dataList[0];
            $this->setLayout('dashboard');
            return $this->render('update-event', [
                'event' => $event,
            ]);
        }
        if($request->isPost())
        {
            $event->loadData($request->getBody());
            if ($event->update($event->id)){
                Application::$app->session->setFlash('success', 'Thanks for updating Event');
                Application::$app->response->redirect('events');
            }
            return $this->render('update-event', [
                'model' => $event
            ]);
        }

        return $this->render('update-event', [
            'model' => $event
        ]);
    }

    //add new event
    public function add(Request $request)
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


    public function delete(Request $request)
    {
        $event = new Event();

        if ($request->isPost()){
            $event->loadData($request->getBody());
            if ($event->delete($event->id)){
                Application::$app->session->setFlash('success', 'has successfully deleted');
                Application::$app->response->redirect('events');
            }
        }
    }

}