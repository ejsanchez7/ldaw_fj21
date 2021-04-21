<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un idioma puede tener muchos libros
    public function books(){
        return $this->hasMany(Book::class);
    }

    /*************
        MÉTODOS
    **************/

    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

}
