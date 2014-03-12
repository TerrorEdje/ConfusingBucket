<?php
	class Story
	{
		private $id;
		private $type;
		private $organization_id;
		private $student_id;
		private $study_id;
		private $startdate;
		private $enddate;
		private $description;
		private $schoolyear;
		private $link;
		
		public function _get($property) 
		{
            if (property_exists($this, $property)) 
			{
                return $this->$property;
            }
        }
        
        public function _set($property, $value) 
		{
            if (property_exists($this, $property)) 
			{
                $this->$property = $value;
            }
            return $this;
        }
	}

?>