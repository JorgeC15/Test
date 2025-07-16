<?php

use App\Http\Controllers\SuscriberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//Index -> mostrar subscribers
Route::get('suscribers',[SuscriberController::class, 'index']);

//store -> Almacenar suscriptor
Route::post('suscribers',[SuscriberController::class, 'store']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
