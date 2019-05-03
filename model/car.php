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
	function findbyid($id)
	{
		$stmt= $this->conn->prepare("SELECT * from car where id=:id");
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			$data=$stmt->fetch();
			$this->id=$data['id'];
			$this->carbrand=$data['carbrand'];
			$this->carmodel=$data['carmodel'];
			$this->cardate=$data['cardate'];
			$this->price=$data['price'];
		}

	}
	function search($country,$from,$until)
	{
		$stmt=$this->conn->prepare("SELECT * from car where country like :country");
		$stmt->bindParam(':country',$country);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			$data=$stmt->fetchall();
			return $data;
		}
	}

}