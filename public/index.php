<?php
use Router\Router;

require '../vendor/autoload.php';


define('VIEWS' , dirname(__DIR__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
define('SCRIPTS',dirname($_SERVER['SCRIPT_NAME']).DIRECTORY_SEPARATOR);

$router = new Router($_GET['url']);


$router->get('/','App\Controllers\BlogController@welcom');
$router->get('/posts','App\Controllers\BlogController@index');

$router->get('/posts/:id','App\Controllers\BlogController@show');

$router->get('/formulaire','App\Controllers\BlogController@formulaire');

$router->get('/edit','App\Controllers\BlogController@edit');

$router->get('/admin','App\Controllers\BlogController@admin');

$router->get('/delete','App\Controllers\BlogController@delete');

$router->post('/traitement','App\Controllers\BlogController@traitement');

$router->run();