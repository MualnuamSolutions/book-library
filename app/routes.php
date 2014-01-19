<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
 * Handle the error page
 * @default 404 i.e missing
 */
App::error(function($exception, $code)
{
    switch ($code)
    {
        case 401:
            return Response::view('error.denied', array(), 401);

        case 404:
        	if( Auth::check() )
        	return Response::view('error.notfound', array(), 404); //backend 404
        	else
        	return Response::view('error.default', array(), 404); //frontend 404
        case 403:
        	return Response::view('error.forbidden', array(), 403); //unauthorized download of media content
        
        default:
        	
            
    }
});

Route::get('/', array('before'=>'auth', function()
{
	return View::make('home.index');
}));

Route::controller('auth', 'AuthController');
Route::resource('idcard', 'IdcardController');
