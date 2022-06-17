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
use app\models\Event;
use app\models\LoginForm;
use app\models\User;

/**
 * Class SiteController
 *
 * @author  Abdeslam Loukili <abdeslam.edu@gmail.com>
 * @package app\controllers
 */
class SiteController extends Controller
{
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function home()
    {
        $event = new Event();
        $event->getAll();
        $events = $event->dataList;
        return $this->render('home', [
            'events' => $events,
        ]);
    }

    public function login(Request $request)
    {
        $loginForm = new LoginForm();
        if ($request->getMethod() === 'post') {
            $loginForm->loadData($request->getBody());

            if ($loginForm->validate() && $loginForm->login()) {
                //TODO check user role
                if (Application::$app->session->get('role') === 'user'){
                    Application::$app->response->redirect('/profile');
                    return;
                }
                if (Application::$app->session->get('role') === 'admin'){
                    Application::$app->response->redirect('/dashboard');
                    return;
                }
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $loginForm
        ]);
    }

    public function register(Request $request)
    {
        $registerModel = new User();
        if ($request->getMethod() === 'post') {
            $registerModel->loadData($request->getBody());
            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                Application::$app->response->redirect('/');
                return 'Show success page';
            }
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        Application::$app->logout();
        $response->redirect('/');
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function community()
    {
        return $this->render('community');
    }

    public function events()
    {
        $event = new Event();
        $event->getAll();
        $events = $event->dataList;
        return $this->render('events', [
            'events' => $events,
        ]);
    }

    public function event()
    {
        return $this->render('event');
    }

    public function profile()
    {
        return $this->render('profile');
    }


}