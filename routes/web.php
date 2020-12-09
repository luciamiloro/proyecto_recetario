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
    return view('index');
});

Route::get('/login', function () {
    return view('login');   
});

Route::get('hola', function () {
    return $_SERVER;
    //{"clave":"valor","otraclave":"otrovalor"};

});

Route::get('usuario/{id}', function ($id) {
  return "ID DE USUARIO" . $id;  
});

Route::get('miembros/{id}/nombre/{nombre}', function ($id, $nombre){
    return "Valor de ID = ".$id . "<br>"."Valor de Nombre" .$nombre;
});

Route::get('categoria/{nombre?}', function($nombreCategoria = "Sin Categoria"){
    return "Usted esta en categoria" .$nombreCategoria;
});

Route::get('articulos', function () {
    
    return view ("articulo", [
        "nombreArticulo" => 'Samsung 59',
        "precioArticulo" => 10000
         ]);
});



Route::get('holaController', [SaludoController::class, 'Saludar' ]);
  