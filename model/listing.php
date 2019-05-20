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
		$stmt= $this->conn->prepare("SELECT * from listing where vehicle_id=:id");
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
	}
	

?>