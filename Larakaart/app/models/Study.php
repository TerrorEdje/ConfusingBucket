<?php

class Study extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'study';

	protected $fillable = ['name', 'description','school_id'];
}
?>