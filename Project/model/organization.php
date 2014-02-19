<?php
	class Organization
	{
		private $id;
		private $name;
		private $description;
		private $website;
		private $story_ids;
		private $location_ids;
		
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