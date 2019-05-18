<?php
	include 'config/Config.php';
	/**
	 * 
	 */
	class database
	{
		private $server=DB_SERVER;
		private $user=DB_USER;
		private $pass=DB_PASS;
		private $name=DB_NAME;

		private $conn;

		function __construct()
		{
			$this->conn=new PDO("mysql:host=$this->server;dbname=$this->name", $this->user, $this->pass);

			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		public  function connection()
		{
			return $this->conn;
		}
	}

	$database=new database();
	?>