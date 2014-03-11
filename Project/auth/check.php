<?php
	class Check{

		public function checkView($user_id, $page, $crud_operation='read', $item_id=null)
		{
			include_once 'db/connection.php';
			include_once 'repositories/accessRepository.php';

			$con = openDB();
			$accesses = getAccessByID($user_id, $con);
			$date = date('Y-m-d H:i:s', time());

			if(!empty($accesses)){

				foreach ($accesses as $access)
				{
					#see if page eques
					if($access->_get('page') == $page){

						#see if a item id is set
						if(!is_null($item_id)){

							#checking item id
							if($access ->_get('item_id') == $item_id){

								#checking crud operation
								if($access ->_get('crud') == $crud_operation && $date > $acces ->_get('release') && $date < $acces ->_get('end')){
									return array(
										'bool'		=> 'true',
										'string'	=> 'Access was granted for item.'
									);
								}
							}
						}
						# if no special item_id is given
						else
						{
							#checking crud operation
							if($access ->_get('crud') == $crud_operation && $date > $access ->_get('release') && $date < $access ->_get('end')){
								return array(
									'bool'		=> 'true',
									'string'	=> 'Access was granted for page.'
								);
							}
						}
					}
				}

				return array(
					'bool'		=> 'false',
					'string'	=> 'Access for this page is denied.'
				);


			}else{

				return array(
					'bool'		=> 'false',
					'string'	=> 'User has not been found'
				);

			}
		}
	}
?>