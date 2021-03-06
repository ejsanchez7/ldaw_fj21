<?php

namespace App\Http\Controllers;

//Incluir el model
//use App\Models\BookFile as Book;
//use App\Models\BookQueryBuilder as Book;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //Laraverl transforma el arreglo a JSON por defecto y cambia el content type
        return Book::getAllBooks();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){

        $book = Book::where("isbn",$id)->first();

        $output = [
            "isbn" => $book->isbn,
            "title" => $book->title,
            "authors" => [],
            "categories" => [],
            "summary" => $book->summary,
            "edition" => $book->edition,
            "publisher" => $book->publisher->name,
            "language" => $book->language->name
        ];

        foreach($book->authors as $author){
            $output["authors"][] = $author->getFullName();
        }

        return $output;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
