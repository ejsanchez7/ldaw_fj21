<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller{

    private $books = [
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


    //Catálogo de libros
    public function listBooks(){

        return view("booksList", ["booksList" => $this->books, "param2" => "hola"]);

    }

    //Detalle de libro
    public function bookDetail($bookId){

        $book = $this->books[$bookId];

        return view("book", ["book" => $book]);

    }

}
