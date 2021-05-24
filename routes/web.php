<?php

use Illuminate\Support\Facades\Route;

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
    return view('Introduccion.vista');
})->name('Index');

Route::get('/gestion', function () {
    return view('Gestion.vista');
})->name('Gestion');

Route::get('/educacion', function () {
    return view('Educacion.vista');
})->name('Educacion');

Route::get('/vinculacion', function () {
    return view('Vinculacion.vista');
})->name('Vinculacion');

Route::get('/comunicacion', function () {
    return view('Comunicacion.vista');
})->name('Comunicacion');

Route::get('/Nosotros', function () {
    return view('Nosotros.Contenido');
})->name('Nosotros');
Route::get('/Unibici', function () {
    return view('Unibici.index');
})->name('Unibici');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
