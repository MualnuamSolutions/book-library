<?php

class DashboardController extends \BaseController {

	public function principal()
	{
		return View::make('dashboard.principal');
	}

	public function administrator()
	{
		return View::make('dashboard.administrator');
	}

}