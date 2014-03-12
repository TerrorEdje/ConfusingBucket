<?php
	class Access
	{
		private $user_id;
		private $page;
        private $crud_operations;
        private $item_id;
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