 <?php
/**
 * User: aslukili
 * Date: 7/7/2020
 * Time: 9:57 AM
 */


use app\controllers\AboutController;
use app\controllers\SiteController;
use app\core\Application;

require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
$config = [
    'userClass' => \app\models\User::class,
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/login', [SiteController::class, 'login']);
$app->router->post('/login', [SiteController::class, 'login']);
$app->router->get('/logout', [SiteController::class, 'logout']);
$app->router->get('/contact', [SiteController::class, 'contact']);
 $app->router->get('/events', [SiteController::class, 'events']);
 $app->router->get('/event', [SiteController::class, 'event']);
 $app->router->get('/community', [SiteController::class, 'community']);
$app->router->get('/about', [AboutController::class, 'index']);
$app->router->get('/profile', [SiteController::class, 'profile']);


//dashboard
 $app->router->get('/dashboard', [\app\controllers\DashboardController::class, 'dashboard']);


//events resources
$app->router->get('/manage-events', [\app\controllers\EventController::class, 'eventList']);
$app->router->post('/manage-events', [\app\controllers\EventController::class, 'add']);
$app->router->post('/delete-event', [\app\controllers\EventController::class, 'delete']);
$app->router->get('/update-event', [\app\controllers\EventController::class, 'update']);
$app->router->post('/update-event', [\app\controllers\EventController::class, 'update']);
$app->router->get('/manage-event', [\app\controllers\EventController::class, 'manageEvent']);
 $app->router->post('/manage-event', [\app\controllers\EventController::class, 'addParticipant']);



// Users resources
 $app->router->get('/register', [SiteController::class, 'register']);
 $app->router->get('/members', [\app\controllers\UserController::class, 'UserList']);
 $app->router->post('/register', [\app\controllers\UserController::class, 'add']);
 $app->router->post('/delete-User', [\app\controllers\UserController::class, 'delete']);


 //national representatives
 $app->router->get('/national-rep', [\app\controllers\NatRepsController::class, 'responsiblesList']);
 $app->router->get('/add-resp', [\app\controllers\NatRepsController::class, 'add']);
 $app->router->post('/add-resp', [\app\controllers\NatRepsController::class, 'add']);
 $app->router->post('/delete-resp', [\app\controllers\NatRepsController::class, 'delete']);
 $app->router->get('/update-resp', [\app\controllers\NatRepsController::class, 'update']);
 $app->router->post('/update-resp', [\app\controllers\NatRepsController::class, 'update']);




$app->run();