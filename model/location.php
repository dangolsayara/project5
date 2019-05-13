<?php
include 'database/Database.php';
/**
 * 
 */
class location extends database
{
	public $id;
	public $place;

	function __construct()
	{
		parent::__construct();
	}

	function insert($place)
	{
		$stmt = $this->conn->prepare("INSERT INTO location (place) 
    			VALUES (:place)");

			$stmt->bindParam(':place', $place);

			$stmt->execute();
	}
	function locationid($place)
	{
		$stmt = $this->conn->prepare("SELECT id FROM location where place like :place");

			$stmt->bindParam(':place', $place);

		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			$data=$stmt->fetch();
			return $data['id'];
		}
	}
}