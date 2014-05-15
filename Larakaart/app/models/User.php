<?php
class User extends Eloquent{
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	protected $fillable = ['username', 'email', 'google_token'];
}
?>