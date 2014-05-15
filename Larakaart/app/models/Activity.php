<?php

class Activity extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'activity';
	
    protected $fillable = ['name', 'description', 'startdate', 'enddate', 'type', 'status', 'organization_id', 'study_id'];
    
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