<?php
	class Check{

		public function checkView($user_id, $page, $crud_operation='read', $item_id=null)
		{
			include 'db/connection.php';
			include 'repositories/accesRepository.php';

			$con = openDB();
			$accesses = getAccesByID($user_id, $con);
			$date = date('Y-m-d H:i:s', time());

			if(!empty($accesses)){

				foreach ($accesses as $acces)
				{
					#see if page eques
					if($acces->_get('page') == $page){

						#see if a item id is set
						if(!is_null($item_id)){

							#checking item id
							if($acces ->_get('item_id') == $item_id){

								#checking crud operation
								if($acces ->_get('crud') == $crud_operation && $date > $acces ->_get('release') && $date < $acces ->_get('end')){
									return array(
										'bool'		=> 'true',
										'string'	=> 'Acces was granted for item.'
									);
								}
							}
						}
						# if no special item_id is given
						else
						{
							#checking crud operation
							if($acces ->_get('crud') == $crud_operation && $date > $acces ->_get('release') && $date < $acces ->_get('end')){
								return array(
									'bool'		=> 'true',
									'string'	=> 'Acces was granted for page.'
								);
							}
						}
					}
				}

				return array(
					'bool'		=> 'false',
					'string'	=> 'Acces for this page is denied.'
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