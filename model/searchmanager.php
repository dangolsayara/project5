<?php
include "database/Database.php";
	/**
	 * 
	 */
	class carsearch extends database
	{
		private $country;
		private $from;
		private $until;

		function __construct($country,$from,$until)
		{
			parent::__construct();
			$this->country=$country;
			$this->from=$from;
			$this->until=$until;
		}

		public function generateresult()
		{
			$stmt= $conn->prepare("SELECT * FROM car where carmodel like ':country'");   // country is carmodel for now
			$stmt->bindParam(':country',$this->country);
			$stmt->execute();
			if($stmt->rowCount()>0)
				return $stmt->fetchAll();

			return false;
		}
	}
?>	