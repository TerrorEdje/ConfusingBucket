<?php
	class Opleiding
	{
		private $id;
		private $naam;
		private $omschrijving;
		private $organisatie_id;
        private $story_ids;
        private $student_ids;
		
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