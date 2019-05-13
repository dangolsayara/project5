<?php
	include 'database/Database.php';
	include 'model/location.php';
	/**
	 * 
	 */
	class user extends database
	{
		public $id;
		public $name;
		public $email;
		public $password;
		public $location_id;
		public $location;
		public $mobile;

		function __construct()
		{
			parent::__construct();
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

			$stmt = $this->conn->prepare("INSERT INTO user (name, email, password, location_id, mobile) 
    			VALUES (:name, :email, :password, :location_id, :mobile)");

			$stmt->bindParam(':name', $data['name']);
			$stmt->bindParam(':email', $data['email']);
			$stmt->bindParam(':password', $data['password']);
			$stmt->bindParam(':location_id', $place_id);
			$stmt->bindParam(':mobile',$mobile);

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
				$this->name=$data['name'];
				$this->email=$data['email'];
				$this->location_id=$data['location_id'];
				$this->mobile=$data['mobile'];
				
				return true;
			}
			else 
				return false;
		}

	}