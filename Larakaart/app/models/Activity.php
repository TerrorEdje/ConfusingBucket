<?php

class Activity extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'activity';
	
	public static $unguarded = true;
    
	public function getStudyName()
	{
		$study = Study::find($this->study_id);
		if (isset($study))
		{
			return $study->name;
		}
	}
}
?>