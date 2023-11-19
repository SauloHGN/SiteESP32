<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsultaController;
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
    return view('home');
});

Route::get('/estatistica', function () {
    return view('estatistica');
});

Route::get('/documentacao', function () {
    return view('documentacao');
});

Route::get('/consulta', function () {
    return view('consulta');
});

//----------------------------------------

Route::post('/Dados', [ConsultaController::class, 'AcessarDataBase'])->name('Dados');

Route::post('/api/receber-dados', 'APIController@receberDados');