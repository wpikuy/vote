<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function (){
	return redirect('/view');
});

Route::get('/view', 'vote@view');
Route::get('/rule', 'vote@rule');
Route::get('/vote', 'vote@vote');
Route::get('/award', 'vote@award');