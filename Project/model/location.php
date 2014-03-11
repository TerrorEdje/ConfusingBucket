<?php
	class Location
	{
		private $id;
		private $country;
		private $city;
		private $streetname;
		private $number;
		private $zipcode;
		private $latitude;
		private $longitude;
		private $story_ids;
	
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