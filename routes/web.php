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

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/solicitacao', function () {
    return view('solicitacao');
});

Route::get('/perfil-empresa', function () {
    return view('perfilempresa');
});

Route::get('/buscar-provedores', function () {
    return view('buscaprovedores');
});

Route::post('/perfil', function() {
    return view('perfilusuario');
});



Route::get('/login','App\Http\Controllers\ControllerUsuario@index');
Route::get('/cadastro','App\Http\Controllers\ControllerUsuario@create');


Route::post('/login','App\Http\Controllers\ControllerUsuario@store');
Route::post('/login','App\Http\Controllers\Controller@efetuaLogin');