<?php 
declare(strict_types=1);

require_once '../vendor/autoload.php';
require_once '../src/config/config.php';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

use App\controllers\Home;
use App\controllers\Contact;



$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
 $router = new RouteCollector();
 $router->get('/', [Home::class,'index']);
 $router->get('/contact', [Contact::class,'index']);

 $dispatcher =  new Dispatcher($router->getData());

 echo $dispatcher->dispatch('GET',$path);

