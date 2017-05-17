<?php
/*
// need more details to enable Middleware
use \App\Middleware\JsonResponse;
$app->get('/details', '\App\Controllers\UserController:userInfo')
  ->add(new JsonResponse());
*/
  
$app->get('/', function ($request, $response, $args) {
	
    $response->write('---Hello---');
    //$this->logger->addInfo("Something interesting happened");
    return $response;

})->add(ExampleMiddleware::class);


 
$app->get('/test', '\App\Controllers\UserController:test');
$app->get('/details', '\App\Controllers\UserController:userInfo');

$app->post('/AddDetails', '\App\Controllers\UserController:AddUserInfo');
$app->post('/details/{id}', '\App\Controllers\UserController:getUser');
	
