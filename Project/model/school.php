<?php
	class School
	{
		private $id;
		private $name;
		private $website;
		private $location_ids;
		private $study_ids;
		
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