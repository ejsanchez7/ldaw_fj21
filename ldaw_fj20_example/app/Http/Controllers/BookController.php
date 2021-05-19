<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importar el model
use App\Models\Book;

//Autenticación
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Gate;



class BookController extends Controller{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //dd(auth()->user());
        $this->authorize("viewAny",Book::class);

        //llamada al modelo
        $books = Book::getBooks();
        //dd($books);

        return view("booksList", ["booksList" => $books]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        //$this->authorize("create",Book::class);

        $response = Gate::inspect("create",Book::class);

        if (!$response->allowed()) {
            return redirect("/");
        }

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

        $this->authorize("view",Book::class);

        $book = Book::getBook($id);

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
