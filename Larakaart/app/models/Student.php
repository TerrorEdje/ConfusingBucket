<?php

class Student extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'student';

	protected $fillable = ['firstname', 'insertion','surname', 'email', 'study_id'];
}
?>