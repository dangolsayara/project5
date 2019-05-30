<?php
/**
 * 
 */
class checkout
{
	private $conn;
	function __construct()
	{
		$database=new database();
		$this->conn=$database->connection();
	}


	function insert($data)
	{
		$stmt = $this->conn->prepare("INSERT INTO checkout (`listing_id`, `bookedby_id`, `vehicle_id`)
    			VALUES (:listing_id, :bookedby_id, :vehicle_id)");

		$stmt->bindParam(':listing_id', $data['listing_id']);
		$stmt->bindParam(':bookedby_id', $data['bookedby_id']);
		$stmt->bindParam(':vehicle_id', $data['vehicle_id']);

		$stmt->execute();

		$stmt = $this->conn->prepare("UPDATE `listing` SET `checkout_status`= 1 WHERE id=:listing_id;");

		$stmt->bindParam(':listing_id', $data['listing_id']);	
		$stmt->execute();

		return true;
	}
}