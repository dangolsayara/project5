<?php
	/**
	 * 
	 */
	class user 
	{
		private $conn;
		function __construct()
		{
			$database=new database();
			$this->conn=$database->connection();
		}

		function insert($data)
		{

			$stmt = $this->conn->prepare("INSERT INTO user (name, email, password, location, mobile) 
    			VALUES (:name, :email, :password, :location, :mobile)");

			$stmt->bindParam(':name', $data['name']);
			$stmt->bindParam(':email', $data['email']);
			$stmt->bindParam(':password', $data['password']);
			$stmt->bindParam(':location_id', $data['location']);
			$stmt->bindParam(':mobile',$data['mobile']);

			if($stmt->execute())
				return true;

			return false;
		}
		function findbyid($id)
		{
			$stmt= $this->conn->prepare("SELECT * from user where id=:id");
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