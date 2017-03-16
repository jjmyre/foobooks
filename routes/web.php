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
Route::get('/', 'WelcomeController');

Route::get('/book/{title?}', function($title=null) {
	if($title == null) {
		return "You need to be more specific";
	}
    return "You want to view ".$title;
});

if(config('app.env')== 'local') {
	Route::get('/logs', function(){ });
}

Route::get('/practice', function() {
    echo config('mail.driver');
});

Route::any('/practice/{n?}', 'PracticeController@index');