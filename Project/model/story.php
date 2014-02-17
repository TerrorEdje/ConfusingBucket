<?php
	class Story
	{
		private $id;
		private $type_id;
		private $begin_datum;
		private $eind_datum;
		private $beschrijving;
		private $link;
		private $leerjaar;
        private $opleiding_ids;
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