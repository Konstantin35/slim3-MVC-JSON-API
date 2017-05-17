<?php

namespace App\Models;

use App\Controllers\Container;

class UserModel extends Container{
	
	public function getDetails(){
		$stmt = $this->container->db->prepare("select * from crud");
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function addDetails($input){
		$stmt = $this->container->db->prepare("insert into crud (fname,lname) values (:fname,:lname)");
		$stmt->bindParam("fname", $input['fname']);
		$stmt->bindParam("lname", $input['lname']);
		$stmt->execute();
		$input['id'] = $this->container->db->lastInsertId();
		return $input;
	}

	public function getUser($input){
		$stmt = $this->container->db->prepare("select * from crud where id = :id");
		$stmt->bindParam("id", $input['id']);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
}



?>	