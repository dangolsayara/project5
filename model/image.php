<?php

class image
{
	private $conn;
	function __construct()
	{
		$database=new database();
		$this->conn=$database->connection();
	}

	function selectByCarId($id)
	{
		$stmt= $this->conn->prepare("SELECT * from images where vehicle_id=:id");
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			$data=$stmt->fetchall();
			return $data;
		}
		else 
			return false;


	}
}