<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejercicio1', 'Laboratorio06Controller@ejercicio1');
Route::post('ejercicio1post','Laboratorio06Controller@recibirDatos1');

Route::get('/ejercicio2', 'Laboratorio06Controller@ejercicio2');
Route::post('ejercicio2post','Laboratorio06Controller@recibirDatos2');

Route::get('/ejercicio3', 'Laboratorio06Controller@ejercicio3');
Route::post('ejercicio3post','Laboratorio06Controller@recibirDatos3');