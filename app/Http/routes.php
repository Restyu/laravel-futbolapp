<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

  Route::get('/', function(){
    return redirect('teams');
  });

  Route::get('teams','TeamsController@index');
  Route::post('teams', 'TeamsController@store');
  Route::get('teams/{team}','TeamsController@show');
  Route::get('teams/{team}/edit','TeamsController@edit');
  Route::patch('teams/{team}','TeamsController@update');

  Route::get('players','PlayersController@index');
  Route::get('players/newplayer','PlayersController@new');
  Route::get('players/{player}','PlayersController@show');

});
