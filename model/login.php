<?php

	include 'database/Database.php';

	class login extends database
	{
		public $email;
		public $password;

		public function userlogindetail($data)
		{
			$data['password'] = md5($data['password']);
  			$stmt = $conn->prepare("SELECT * FROM user WHERE email=:email AND password=:password");
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
    	          	$_SESSION['role']=$info['role'];
           			return true;
    			}
    	
     		}
     		else
     		{
          		return false;
     		}
		}
	}