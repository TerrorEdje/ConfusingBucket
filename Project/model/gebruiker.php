<?php
	class Gebruikler
	{
		private $id;
		private $gebruikersNaam
		private $wachtwoord
		private $email
		
		public function _get($property) {
			if (property_exists($this, $property)) {
				return $this->$property;
			}
		}
		
		public function _set($property, $value) {
			if (property_exists($this, $property)) {
				$this->$property = $value;
			}
			return $this;
		}
	}
?>