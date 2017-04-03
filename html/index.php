<?php
require 'vendor/autoload.php';

use Core\Router\Router;

/**
 * On cree une instance de router pour lier chacune de nos routes au controleur et a la fonction voulue
 */
$router = new Router($_GET['url']);


/***********************************************************************************
 * INDEX
 **********************************************************************************/

$router->get('/', "IndexController#index");

/***********************************************************************************
 * INDEX
 **********************************************************************************/

$router->get('/bundle.js', "AssetsController#index");


/***********************************************************************************
 * AUTH
 **********************************************************************************/

$router->post('/login', "UserController#login");

$router->post('/signup', "UserController#signup");

/***********************************************************************************
 * LISTE
 **********************************************************************************/

$router->get('/liste/:slug', "ListController#showOne")->with('slug', '([a-z\0-9]+)');
$router->get('/liste', "ListController#index");


/***********************************************************************************
 * ROUTES JSON
 **********************************************************************************/

$router->get('/json/home', "JsonController#index");

$router->get('/json/pathologies', "JsonController#JsonPatho");

$router->get('/json/symptpatho', "JsonController#JsonSymptPatho");

/***********************************************************************************
 * CALC WEBSERVICE
 **********************************************************************************/

$router->get('/calc/home', "WsController#index");

$router->get('/calc/add/:num1/:num2', "WsController#add")->with('num1', '[0-9]+')->with('num2', '[0-9]+');

$router->get('/calc/sub/:num1/:num2', "WsController#sub")->with('num1', '[0-9]+')->with('num2', '[0-9]+');

$router->get('/calc/mult/:num1/:num2', "WsController#mult")->with('num1', '[0-9]+')->with('num2', '[0-9]+');

$router->get('/calc/div/:num1/:num2', "WsController#div")->with('num1', '[0-9]+')->with('num2', '[0-9]+');

/***********************************************************************************
 * RUN THE ROUTER
 **********************************************************************************/


$router->run();
?>
