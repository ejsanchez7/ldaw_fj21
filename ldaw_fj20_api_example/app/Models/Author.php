<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model{

    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un autor pertenece a un país
    public function country(){
        return $this->belongsTo(Country::class);
    }

    //Un autor puede escribir muchos libros
    public function books(){
        return $this->belongsToMany(Book::class,"authors_books");
    }


    /*************
        MÉTODOS
    **************/

    public function getFullName(){

        return trim(implode(" ", [$this->first_name,$this->last_name,$this->second_last_name]));

    }


    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

}
