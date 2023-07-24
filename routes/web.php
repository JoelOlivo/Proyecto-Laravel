<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return "Hola Mundo";
});

Route::get('/cadena', function(){
    return [
        'curso' => ['curso laravel', 'curso de programación', 'programación orientada a objetos']
    ];
});

Route::get('/home/{nombre}', function($nombre){
    return $nombre;
});

Route::get('/home/{nombre}/{apellido}', function($nombre, $apellido){
    return $nombre . $apellido;
});
