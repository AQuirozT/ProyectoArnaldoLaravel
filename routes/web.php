<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/detalles/{id}', 'PagesController@detalles')->name('clientes.clientedetalles');

Route::put('/detalles/{id}', 'PagesController@modificar')->name('clientes.clientedetalles');

Route::delete('/detalles/{id}', 'PagesController@borrar')->name('clientes.clientedetalles');

Route::post('/', 'PagesController@crear')->name('clientes.crear');

Route::get('/blog', 'PagesController@blog')->name('blog');

Route::get('/cosas', 'PagesController@cosas')->name('cosas');

Route::get('/mipyme/{nombre?}', 'PagesController@mipyme')->name('mipyme');