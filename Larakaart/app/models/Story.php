<?php

use Illuminate\Auth\StoryInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Story extends Eloquent implements StoryInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'story';
}
?>