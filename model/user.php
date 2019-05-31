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
		function resetPassword($id,$data)
		{
			$stmt = $this->conn->prepare("UPDATE `user` SET `password`=:password WHERE id=:id");

			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':password', $data['password']);
			

			if($stmt->execute())
				return true;
			else
				return false;
		}
		function update($id,$data)
		{
			$stmt = $this->conn->prepare("UPDATE `user` SET `name`=:name, `email`=:email, `location`=:location, `mobile`=:mobile WHERE id=:id");

			$stmt->bindParam(':id', $id);
			$stmt->bindParam(':name', $data['name']);
			$stmt->bindParam(':email', $data['email']);
			$stmt->bindParam(':location', $data['location']);
			$stmt->bindParam(':mobile', $data['mobile']);

			

			if($stmt->execute())
				return true;
			else
				return false;
		}

	}