<?php

/**
 * 
 */
class session
{
	public $id;
	public $email;

	public $status=false;


	function __construct()
	{
		session_start();
		if(isset($_SESSION['id'])&&isset($_SESSION['email']))
		{
			$this->id=$_SESSION['id'];
			$this->email=$_SESSION['email'];
			$this->status=true;

		}
	}

	function isloggedin()
	{
			if($this->status==true)
				return true;
			else
				return false;
	}

	function getkey($key)
	{
  		if (isset($_SESSION[$key])) 
  		{
   			return $_SESSION[$key];
  		} 
  		else 
  		{
   			return false;
  		}
	}

	function sessiondestroy()
	{
		session_destroy();
		header("Location:login.php");
	}
}