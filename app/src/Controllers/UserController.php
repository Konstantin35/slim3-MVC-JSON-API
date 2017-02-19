<?php


namespace App\Controllers;

use App\Controllers\Container;
use App\Models\UserModel;

class UserController extends Container{
	
	public function test($request, $response, $args){
		 $response->write("Welcome to Slim! hh");
		 $this->container->logger->addInfo("Something interesting happened");
		 return $response;
	}

	public function userInfo($request, $response, $args){
		$model = new UserModel($this->container);
		$rsp = $model->getDetails();
		$response  = $response->withJson($rsp);
		return $response;
	}


}

?>