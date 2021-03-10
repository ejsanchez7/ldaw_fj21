<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller{

    private function readBooks(){
        //Generar el path al archivo
        $filePath = storage_path("app/json/books.json");

        //Cargar el archivo
        if($fileContents = file_get_contents($filePath)){
            //Transformarlo a una estructura de datos
            return json_decode($fileContents,true);
        }

        return [];
    }

    //Catálogo de libros
    public function listBooks(){

        $books = $this->readBooks();

        //dd($books);

        return view("booksList", ["booksList" => $books]);

    }

    //Detalle de libro
    public function bookDetail($bookId){

        $book = $this->books[$bookId];

        return view("book", ["book" => $book]);

    }

}
