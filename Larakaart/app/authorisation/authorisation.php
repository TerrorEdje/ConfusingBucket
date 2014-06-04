<?php

//	Pagina bv organisatie 
//	Nummertje van organisatie

function checkAccess($page, $id)
{
	$user = User::find(Auth::user()->id);

	

	return false;
}

?>