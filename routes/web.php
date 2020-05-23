<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('/login');
});

Route::post('login','Users@login');
Route::post('login', [ 'as' => 'login', 'uses' => 'Users@login']);

Route::get('logout', array(
    'uses' => 'Users@doLogout'
  ));

Route::get('list', 'Users@list')->middleware('auth');

Route::get('create', 'Users@create');

Route::get('showloco', 'Users@showloco')->middleware('auth');

Route::post('loginsubmit','Users@loginsubmit');

Route::get('locodetails','Users@locodetails')->middleware('auth');

Route::post('createsubmit','Users@createsubmit');

Route::post('locodetailssubmit','Users@locodetailssubmit');
