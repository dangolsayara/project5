<?php
	include 'database/Database.php';
/**
 * 
 */
class checkout extends database
{
	public $id;
	public $vehicle_id;
	public $listing_id;	
	public $checkout_from;
	public $checkout_until;
	public $user_id;

	function __construct()
	{
		parent::__construct();
	}

	function insert($data)
	{
		$stmt = $this->conn->prepare("INSERT INTO checkout (`vehicle_id`, `listing_id`, `checkout_from`, `checkout_until`, `user_id`) 
    			VALUES (:vehicle_id, :listing_id, :checkout_from, :checkout_until, :user_id)");

		$stmt->bindParam(':vehicle_id', $data['vehicle_id']);
		$stmt->bindParam(':listing_id', $data['listing_id']);
		$stmt->bindParam(':checkout_from', $data['checkout_from']);
		$stmt->bindParam(':checkout_until', $data['checkout_until']);
		$stmt->bindParam(':user_id', $data['user_id']);

		$stmt->execute();

		return true;
	}
}