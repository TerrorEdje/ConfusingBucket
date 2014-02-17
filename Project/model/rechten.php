<?php
	class Rechten
	{
		private $id;
		private $omschrijving;
        private $gebruiker_gebruikersnamen;
		
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