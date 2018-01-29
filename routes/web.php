<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/s', function ()
{
  return request()->session()->all();
});

Route::get('/m', function ()
{
  $champion  = new \App\Champion();
  $champion->name = 'lee';
  event(new \App\events\ChampionCreated($champion));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/champions/create', 'ChampionsController@create');

Route::post('/champions/make', 'ChampionsController@make');

Route::get('/champions/store', 'ChampionsController@store');

Route::get('/', 'ChampionsController@index');

Route::get('champions/{champion}', 'ChampionsController@show');

Route::get('/champions/{champion}/edit', 'ChampionsController@edit');

Route::post('/champions/{champion}/update', 'ChampionsController@update');

Route::get('/ability/create', 'AbilitiesController@create');

Route::post('ability/store/{ability}', 'AbilitiesController@store');

Route::post('/subscribe', "SubscribersController@store");

Route::post('/subscribe/{champion}', 'SubscribersController@champion');
