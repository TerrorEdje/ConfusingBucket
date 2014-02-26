<?php
	include 'model/accescrud.php';

	class Acces
	{
		private $user_id;
		private $page;
        private $crud;
        private $release;
		private $end;
		
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