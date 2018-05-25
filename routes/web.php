<?php



Route::get('/', 'TaskController@index');
Route::post('/task', 'TaskController@create');
// Route::post('/tasks{tasks}', 'TaskController@show');
Route::delete('/task/{id}', 'TaskController@destroy');

