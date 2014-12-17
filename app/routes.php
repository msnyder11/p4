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

# /app/routes.php



Route::get('/', function()
{
	return View::make('home');
    
});

Route::get('/results', function()
{
     return Redirect::to('/');
    
});
Route::post('/results', 'ResultsController@postResults');


Route::get('/leaderboard', 'LeaderboardController@getLeaderboard');
Route::get('/yourscores', 'LeaderboardController@getYourscores');

Route::get('/usersignup',
    array(
        'before' => 'guest',
        'uses' => 'UserController@getUsersignup'
        
    )
);

Route::post('/usersignup', 
    array(
        'before' => 'csrf',
        'uses' => 'UserController@postUsersignup'
    )
);



Route::get('/userlogin',
    array(
        'before' => 'guest',
        'uses' => 'UserController@getUserlogin'
    )
);

Route::post('/userlogin', 
    array(
        'before' => 'csrf', 
        'uses' => 'UserController@postUserlogin'
    )
);

Route::get('/logout', 'UserController@getLogout');

