<?php
	class login
	{
		public $id;
		public $email;
		public $password;

        private $conn;
        function __construct()
        {
            $database=new database();
            $this->conn=$database->connection();
        }

		public function userlogindetail($data)
		{
			session_start();
			//$data['password'] = md5($data['password']);
  			$stmt = $this->conn->prepare("SELECT * FROM user WHERE email=:email AND password=:password");
    		$stmt->bindparam (':email',$data['email']);
    		$stmt->bindparam(':password',$data['password']);
   
    		if ($stmt->execute())
    		{
    		$stmt->setFetchMode(PDO::FETCH_ASSOC); 
    		if ($stmt->rowCount()>0) 
    			{
                	$info= $stmt->fetch();
                	$_SESSION['id']=$info['id'];
    	         	$_SESSION['email']=$info['email'];
    	          	
           			return true;
    			}
    	
     		}
     		else
     		{
          		return false;
     		}
		}
	}