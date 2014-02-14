<?php
	class Locatie
	{
		private $id;
		private $land;
		private $plaats;
		private $straatnaam;
		private $huisnummer;
		private $postcode;
		private $latitude;
		private $longitude;
	
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