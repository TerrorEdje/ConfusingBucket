<?php
	class Student
	{
		private $id;
		private $voornaam;
		private $tussenvoegsel;
		private $achternaam;
		private $email;
		private $gebruiker_id;
        private $opleiding_ids;
        private $story_ids;
		
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