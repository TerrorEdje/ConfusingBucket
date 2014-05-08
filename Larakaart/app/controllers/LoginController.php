<?php

class LoginController extends BaseController {

	protected $layout = 'layout.main';

	public function getLogin()
	{
		//$this->layout->content = View::make('home');
		//return 'hhee';
		//return View::make('login.form');
		return View::make('login.loginVeld');
	}

}