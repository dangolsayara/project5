<?php
	include 'database/Database.php';
/**
 * 
 */
class car extends database
{
	public $id;
	public $carbrand;
	public $carmodel;
	public $cardate;
	public $price;

	function __construct()
	{
		parent::__construct();
	}

	function insert($data)
	{
		$stmt = $this->conn->prepare("INSERT INTO car (carbrand, carmodel, cardate,price) 
    			VALUES (:carbrand, :carmodel, :cardate, :price)");

		$stmt->bindParam(':carbrand', $data['carbrand']);
		$stmt->bindParam(':carmodel', $data['carmodel']);
		$stmt->bindParam(':cardate', $data['cardate']);
		$stmt->bindParam(':price', $data['price']);

		$stmt->execute();
	}
}

/**
 * 
 */
class carsearchmodel
{
	public $id;
	public $carbrand;
	public $carmodel;
	public $cardate;
	public $price;
	function __construct()
	{
		# code...
	}
}