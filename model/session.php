<?php

/**
 * 
 */
class session
{
	public $id;
	public $email;

	public $status;


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
	function sessiondestroy()
	{
		session_destroy();
	}
}