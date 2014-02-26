<?php
	class accescrud
	{
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
			else if (property_exists($this, $property))
			{
				$this->$property = $value;
			}
		
			return $this;
		}
	}
?>