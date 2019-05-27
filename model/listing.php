<?php
	class listing
	{
		private $conn;
	function __construct()
	{
		$database=new database();
		$this->conn=$database->connection();
	}

	public function findbyvehicleid($id)
	{
		$date=date('Y-m-d');
		$stmt= $this->conn->prepare("SELECT * from listing where vehicle_id=:id and available_until>'$date' and checkout_status=0");
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

	public function findbyuserid($id)
	{
		$stmt= $this->conn->prepare("SELECT * from listing where user_id=:id");
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
	

?>