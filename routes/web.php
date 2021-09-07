<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'TestController@welcome');

Auth::Routes();

Route::get('/home', 'HomeController@index')->name('home');