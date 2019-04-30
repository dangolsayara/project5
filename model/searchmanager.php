<?php
	/**
	 * 
	 */
	class search
	{
		private $country;
		private $from;
		private $until;

		function __construct($country,$from,$until)
		{
			$this->country=$country;
			$this->from=$from;
			$this->until=$until;
		}

		public function generateresult()
		{
			return " I have a value $this->country, $this->from, $this->until";
		}
	}
?>	