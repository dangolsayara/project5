<?php
	include 'database/Database.php';
	include 'model/location.php';
/**
 * 
 */
class car 
{
	private $conn;

	function __construct()
	{
		$this->conn=new database();
	}

	function insert($data)
	{
		$location=new location();
			$place_id=$location->locationid($data['place']);
			if(empty($place_id))
			{
				$location->insert($data['place']);
				$place_id=$location->locationid($data['place']);
			}
		$stmt = $this->conn->prepare("INSERT INTO car (brand, model, noofseats, milege, price, location_id) 
    			VALUES (:brand, :model, :noofseats, :milege, :price, :location_id)");

		$stmt->bindParam(':brand', $data['brand']);
		$stmt->bindParam(':model', $data['cmodel']);
		$stmt->bindParam(':noofseats', $data['noofseats']);
		$stmt->bindParam(':milege', $data['milege']);
		$stmt->bindParam(':price', $data['price']);
		$stmt->bindParam(':location_id', $place_id);

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
			$this->id=$data['id'];
			$this->brand=$data['brand'];
			$this->model=$data['model'];
			$this->milege=$data['milege'];
			$this->price=$data['price'];
			return true;
		}
		else 
			return false;


	}
	function search($place,$from,$until)
	{
		$stmt=$this->conn->prepare("SELECT car.*,location.place from car inner join location on car.location_id=location.id where location.place like '%".$place."%'");
		$stmt->bindParam(':place',$place);
		$stmt->execute();

		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			return $stmt->fetchall();
			
		}
		return false;
	}
	function listing($data)
	{
		$stmt = $this->conn->prepare("INSERT INTO listing (vehicle_id, available_from, available_until, user_id) 
    			VALUES (:vehicle_id,:available_from,:available_until,:user_id)");

		$stmt->bindParam(':vehicle_id', $data['vehicle_id']);
		$stmt->bindParam(':available_from', $data['available_from']);
		$stmt->bindParam(':available_until', $data['available_until']);
		$stmt->bindParam(':user_id', $data['user_id']);

		$stmt->execute();
	}
}