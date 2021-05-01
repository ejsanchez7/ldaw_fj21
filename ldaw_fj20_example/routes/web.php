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

/*
Laravel tien un método estático para cada acción HTTP: get, post, put, patch, delete, options
*/

//Ruta más simple
Route::get("test", function(){
    echo "<h1>Ruta de prueba</h1>";
});

/*
+ Catálogo
+ Detalle de un libro
+ Alta de un préstamo
+ Registro de libro
+ Mis préstamos
*/

//Ruta simple
Route::get("/books-list", function(){

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

    return view("booksList", ["booksList" => $books, "param2" => "hola"]);
});

//Método abreviado para rutas que devuelven vistas estáticas
Route::view('laravel-landing', "welcome");

//Paso de parámetros en rutas

/*
Route::get("book/{id?}", function($bookId = 1){

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

    $book = $books[$bookId];

    return view("book", ["book" => $book]);

//})->where(["id" => "[0-9]+"]);
})->whereNumber("id");
*/

//Named routes
//Route::view("books/new","newBook")->name("new-book");

//Rutas que apuntan a controladores
/*
use App\Http\Controllers\BooksController;

Route::get("/", [BooksController::class, "listBooks"]);
Route::get("book/{id}", [BooksController::class, "bookDetail"])->where(["id" => "[0-9]+"]);

Route::view("list-template","bookListTemplate");


use App\Http\Controllers\testController;

Route::get("test-route", [testController::class, "testAction"]);
*/

use App\Http\Controllers\BookController;

Route::get("/",[BookController::class,"index"]);
Route::resource('books', BookController::class)->except(["index"])->middleware('auth');

// NOTE:: Ruta y funcionalidad para el logout

use App\Model\User;
use Illuminate\Support\Facades\Auth;

Route::get("/logout",function(Request $request){

    if(auth()->user()->revokeToken()){
        //Hacer el logout
        Auth::logout();
        //Invalidar la sesión
        session()->invalidate();
        //Regenerar el token de la sesión
        session()->regenerateToken();

        return redirect('/login');

    }

})->name("logout");
