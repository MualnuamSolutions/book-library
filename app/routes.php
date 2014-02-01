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

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@search');
Route::get('help', array('before'=>'auth', 'uses'=>'HomeController@help'));
Route::get('profile', array('before'=>'auth', 'uses'=>'HomeController@profile'));
Route::post('profile', array('before'=>'auth', 'uses'=>'HomeController@updateProfile'));

Route::controller('auth', 'AuthController');

Route::group(['before' => 'auth|principal'], function() {
    Route::resource('idcard', 'IdcardController');
    Route::get('print-idcard/{id}', function($id){
        return View::make('idcard.print.main', array('id'=>$id));
    });
});

Route::group(['before' => 'auth|administrator'], function() {
    Route::resource('member', 'MemberController');
    Route::get('idcard-detail/{card_no}', function($card_no){
        return View::make('idcard.detail.main', array('card_no'=>$card_no));
    });
    Route::controller('settings', 'SettingController');
    Route::resource('user', 'UserController');
    Route::resource('book', 'BookController');
    Route::resource('author', 'AuthorController');
    Route::resource('publisher', 'PublisherController');
    Route::resource('category', 'CategoryController');
});

Route::group(['before' => 'auth'], function() {
    if(Auth::check()) {
        if( Auth::user()->role == 'principal' )
            Route::get('dashboard', 'DashboardController@principal');
        else if( Auth::user()->role == 'administrator' ) 
            Route::get('dashboard', 'DashboardController@administrator');
    }
});
