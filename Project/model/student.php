<?php
	class Student
	{
		private $_id;
		private $_voornaam;
		private $_tussenvoegsel;
		private $_achternaam;
		private $_email;
		private $_gebruiker_id;
		
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