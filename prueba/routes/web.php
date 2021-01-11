<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
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
    return view('welcome');
});

##Route::get('peticion', 'accion')
Route::get('/practica', function() {
    return 'Prueba';
});

Route::get('/inicio', function () {
    return view('welcome');
});

Route::get('/prueba' , function() {
    return view('prueba');
});

Route::get('/formulario' , function() {
    return view('formulario');
});
//Route::view('/formulario2', 'formulario');

Route::post('/proceso' , function() {
    //Capturamos datos desde el form
    $frase = $_POST['frase'];
    //Pasamos datos a la vista como array asociativo

    return view('proceso', ['frase' => $frase]);
});

//Implementando el motor de la plantilla blade
Route::view('inicio2', 'layouts/inicio');

//Trayendo datos en la base de datos
Route::get('/regiones', function(){
    //Pasamos datos a la vista
    $regiones = \Illuminate\Support\Facades\DB::table('regiones')->get();
    return view('regiones', ['regiones' => $regiones]);
});
