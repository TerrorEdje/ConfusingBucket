<?php

class IndexController extends BaseController {

	protected $layout = 'layout.main';

	public function index()
	{
		//$this->layout->content = View::make('home');
		return View::make('home');
	}

}