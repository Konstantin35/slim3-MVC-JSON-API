<?php

namespace App\Models;

use App\Controllers\Container;

class UserModel extends Container{
	
	public function getDetails(){
		$stmt = $this->container->db->prepare("select * from crud");
		$stmt->execute();
		$result = $stmt->fetchAll();
		$response = json_encode($result);
		return $response;
	}
}



?>	