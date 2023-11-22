<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\APIController;
use App\Http\Controllers\Esp32Controller;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/salvar-dados', 'Esp32Controller@salvarDados');
//Route::post('/salvar-dados', [Esp32Controller::class])->name('salvarDados');

Route::post('/salvar-dados', [Esp32Controller::class, 'salvarDados'])->name('salvarDados');


//Route::apiResource('receber-dados', 'APP\http\Controllers\Api\APIController');

// Route::post('/receber-dados', [ApiController::class])->name('index');
// Route::post('/criar', [ApiController::class])->name('create');
// Route::get('/exibir/{id}', [UsuarioController::class, 'show']);