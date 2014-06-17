<?php

class Usertype extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usertype';

	protected $fillable = ['user_id', 'student_id', 'organization_id', 'admin_id'];

	public static $unguarded = true;
}
?>