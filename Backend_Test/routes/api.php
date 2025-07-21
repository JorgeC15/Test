<?php

use App\Http\Controllers\SuscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//------------Rutas de la API para suscriptores------------//
//Index -> mostrar subscribers
Route::get('suscribers',[SuscriberController::class, 'index']);
//show -> Mostrar un suscriptor
Route::get('suscribers/{id}',[SuscriberController::class, 'show']);
//store -> Almacenar suscriptor
Route::post('suscribers',[SuscriberController::class, 'store']);
//update -> Actualizar un suscriptor
Route::put('suscribers/{id}',[SuscriberController::class, 'update']);
//destroy -> Eliminar un suscriptor
Route::delete('suscribers/{id}',[SuscriberController::class, 'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
