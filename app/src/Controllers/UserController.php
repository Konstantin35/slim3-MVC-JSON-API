<?php


namespace App\Controllers;

use App\Controllers\Container;
use App\Models\UserModel;

class UserController extends Container{
	
	public function test($request, $response, $args)
	{
		 $response->write("Welcome to Slim! hh");
		 $this->container->logger->addInfo("Something interesting happened");
		 return $response;
	}

	public function userInfo($request, $response, $args)
	{
		$model 	= new UserModel($this->container);
		$rsp 	= $model->getDetails();
		
		return $this->json->render($response,$rsp);
	}

	public function AddUserInfo($request, $response)
	{

		$input = $request->getParsedBody();
		$model = new UserModel($this->container);
		$rsp   = $model->addDetails($input);

		return $this->json->render($response,$rsp);
	}

	public function getUser($request, $response, $args)
	{

		$model = new UserModel($this->container);
		$rsp   = $model->getUser($args);
		
		return $this->json->render($response,$rsp);
	}



}

?>