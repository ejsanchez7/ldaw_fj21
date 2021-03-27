<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller{

    //Esto debería moverse al modelo posteriormente
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
        //Laraverl transforma el arreglo a JSON por defecto y cambia el content type
        return $this->readBooks();
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
    public function show($id)
    {
        echo "show: $id";
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
