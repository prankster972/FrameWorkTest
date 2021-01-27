<?php
use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'PagesController@main');
    Route::post('/', 'PagesController@main');
    Route::post('/task', 'PagesController@create');
    Route::delete('/task/{id}', 'PagesController@delete');
    //Route::resource('/task/{name}', 'PagesController@update');
});
