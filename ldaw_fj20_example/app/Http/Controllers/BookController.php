<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller{

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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $books = $this->readBooks();

        //dd($books);

        return view("booksList", ["booksList" => $books]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view("newBook");

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

        $booksList = $this->readBooks();
        $book = isset($booksList[$id]) ? $booksList[$id] : [];

        return view("book", ["book" => $book]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
