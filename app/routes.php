<?php

$app->get('/', function ($request, $response, $args) {

    $response->write("Welcome to Slim!");
    $this->logger->addInfo("Something interesting happened");
    return $response;

})->add(new ExampleMiddleware());


 
$app->get('/test', '\App\Controllers\UserController:test');
$app->get('/details', '\App\Controllers\UserController:userInfo');

