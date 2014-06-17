<?php

class Admin extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin';

	protected $fillable = ['username', 'email', 'google_token'];
}
?>