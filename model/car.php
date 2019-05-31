<?php

//	include 'model/location.php';
/**
 * 
 */
class car
{
	
	private $conn;
	function __construct()
	{
		$database=new database();
		$this->conn=$database->connection();
	}

	function insert($data)
	{
		
		$stmt = $this->conn->prepare("INSERT INTO car (brand, model, noofseats, milege, price, location) 
    			VALUES (:brand, :model, :noofseats, :milege, :price, :location)");

		$stmt->bindParam(':brand', $data['brand']);
		$stmt->bindParam(':model', $data['model']);
		$stmt->bindParam(':noofseats', $data['noofseats']);
		$stmt->bindParam(':milege', $data['milege']);
		$stmt->bindParam(':price', $data['price']);
		$stmt->bindParam(':location', $data['location']);

		$stmt->execute();
		return true;
	}
	function findbyid($id)
	{
		$stmt= $this->conn->prepare("SELECT * from car where id=:id");
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			$data=$stmt->fetch();
			return $data;
		}
		else 
			return false;


	}
	function search($place)
	{
		$stmt=$this->conn->prepare("SELECT car.*,user.mobile,user.name from car inner join user on car.owner_id=user.id where car.location like '%".$place."%'");
		$stmt->bindParam(':place',$place);
		$stmt->execute();

		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			return $stmt->fetchall();
			
		}
		return false;
	}
	function listing($data,$vehicle_id)
	{
		$stmt = $this->conn->prepare("INSERT INTO listing (vehicle_id, available_from, available_until, user_id) 
    			VALUES (:vehicle_id,:available_from,:available_until,:user_id)");

		$stmt->bindParam(':vehicle_id', $vehicle_id);
		$stmt->bindParam(':available_from', $data['available_from']);
		$stmt->bindParam(':available_until', $data['available_until']);
		$stmt->bindParam(':user_id', $data['user_id']);

		$stmt->execute();
	}
	function findbyuserid($id)
	{
		$stmt=$this->conn->prepare("SELECT * from car where owner_id=:id" );
		$stmt->bindParam(':id',$id);
		$stmt->execute();

		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			return $stmt->fetchall();
			
		}
		return false;
	}
	function update($id,$data)
	{
		$stmt = $this->conn->prepare("UPDATE `car` SET `model`=:model,`brand`=:brand,`noofseats`=:noofseats,`about`=:about,`milege`=:milege,`price`=:price,`location`=:location WHERE id=:id");

		$stmt->bindParam(':brand', $data['brand']);
		$stmt->bindParam(':model', $data['model']);
		$stmt->bindParam(':noofseats', $data['noofseats']);
		$stmt->bindParam(':milege', $data['milege']);
		$stmt->bindParam(':about', $data['about']);
		$stmt->bindParam(':price', $data['price']);
		$stmt->bindParam(':location', $data['location']);
		$stmt->bindParam(':id', $id);

		$stmt->execute();
		return true;
	}
	function delete($id)
	{
		$stmt = $this->conn->prepare("DELETE FROM `car` WHERE id=:id");

	
		$stmt->bindParam(':id', $id);

		$stmt->execute();
		return true;
	}
}