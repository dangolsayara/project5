<?php
	include 'database/Database.php';
/**
 * 
 */
class car extends database
{
	public $id;
	public $brand;
	public $model;
	public $noofseats;
	public $milege;
	public $price;
	public $location_id;

	function __construct()
	{
		parent::__construct();
	}

	function insert($data)
	{
		$stmt = $this->conn->prepare("INSERT INTO car (brand, model, noofseats, milege, price, location_id) 
    			VALUES (:brand, :model, :noofseats, :milege, :price, :location_id)");

		$stmt->bindParam(':brand', $data['brand']);
		$stmt->bindParam(':model', $data['cmodel']);
		$stmt->bindParam(':noofseats', $data['noofseats']);
		$stmt->bindParam(':milege', $data['milege']);
		$stmt->bindParam(':price', $data['price']);
		$stmt->bindParam(':location_id', $data['location_id']);

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
			$this->brand=$data['brand'];
			$this->model=$data['model'];
			$this->milege=$data['milege'];
			$this->price=$data['price'];
		}

	}
	function search($place,$from,$until)
	{
		$stmt=$this->conn->prepare("SELECT * from car inner join location on car.location_id=location.id where location.place like '%".$place."%'");
		$stmt->bindParam(':place',$place);
		$stmt->execute();

		
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowcount()>0)
		{
			return $stmt->fetchall();
			
		}
		return false;
	}
}