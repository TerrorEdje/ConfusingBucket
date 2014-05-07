<?php

class Experience extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'experience';
	
	public function getStudentName()
	{
		$student = Student::find($this->student_id);
		if (isset($student))
		{
			return $student->firstname . " " . $student-> insertion . " " . $student->surname;
		}
	}
}
?>