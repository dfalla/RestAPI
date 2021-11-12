<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Usuario/{usuario}',[UsuarioController::class, 'SaludarUsuario']);  

Route::get('/Persona/{id}',[PersonaController::class, 'ObtenerPersona']); 

Route::post('/Persona',[PersonaController::class, 'CrearPersona']); 

Route::put('/Persona/{id}',[PersonaController::class, 'ModificarPersona']); 

Route::put('/Persona/{id}',[PersonaController::class, 'EliminarPersona']); 
