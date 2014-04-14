<?php
	class Student
	{
		private $id;
		private $firstname;
		private $insertion;
		private $surname;
		private $email;
		
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