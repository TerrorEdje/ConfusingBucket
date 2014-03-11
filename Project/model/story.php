<?php
	class Story
	{
		private $id;
		private $type_id;
		private $startdate;
		private $enddate;
		private $description;
		private $schoolyear;
        private $study_ids;
        private $student_ids;
		private $organization_ids;
		private $location_ids;
		private $residence_location_ids;
		private $links;
	
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