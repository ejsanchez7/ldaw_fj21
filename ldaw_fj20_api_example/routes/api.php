<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*****************************
    Rutas de autenticación
******************************/
use App\Http\Controllers\AuthController;

//Login de sanctum para devolver token
Route::post("/login",[AuthController::class,"login"]);

//Devuelve el usuario
Route::middleware('auth:sanctum')->get('/user',[AuthController::class,"getUser"]);

//NOTE: logout de sanctum
Route::middleware('auth:sanctum')->get("/logout",[AuthController::class,"logout"]);

/**************************************
    Terminan rutas de autenticación
***************************************/

use App\Http\Controllers\BookController;

Route::apiResource("books", BookController::class);
