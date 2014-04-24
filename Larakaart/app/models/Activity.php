<?php

class Activity extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'activity';
	
	public function getStudyName()
	{
		$study = Study::find($this->id);
		return $study->name;
	}
}
?>