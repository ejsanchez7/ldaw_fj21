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

//localhost:8000/api/{ruta}

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("books", function(){

    $books = [
        "1" => [
            "title" => "Viaje al Centro de la Tierra",
            "author" => "Julio Verne"
        ],
        "2" => [
            "title" => "El Faro del Fin del Mundo",
            "author" => "Julio Verne"
        ],
        "3" => [
            "title" => "El Conde de Montecristo",
            "author" => "Alexander Dumas"
        ]
    ];

    return $books;

});
