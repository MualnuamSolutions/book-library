<?php

class AuthController extends \BaseController {

	/**
	 * Display a login page
	 *
	 * @return View
	 */
	public function getIndex()
	{
		return View::make('auth.index');
	}

	public function postIndex()
	{
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);
		
		if( Auth::validate($credentials) ) {
			if( Auth::attempt($credentials, true) ) {
				return Redirect::intended('/');
			}	
		}
		else {
			dd('Invalid');
		}
	}

	public function getLogout()
	{
		Auth::logout();
		Session::flush();
		return Redirect::to('/');
	}

}