<?php

class Login_log extends Eloquent {
	public $timestamps = false;
	
	protected $table = 'login_log';

	protected $fillable = array('datetime', 'gebruiker', 'token');

}
?>