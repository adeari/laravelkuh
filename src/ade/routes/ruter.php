<?php


Route::get('/', function()
{
	return View::make('hello');
});


Route::get('users.html', function()
{
	echo  'pikachu';
});

Route::get('aa', 'awal@index');
Route::get('bb', 'awal@kika');
Route::get('cc', 'awal@datak');