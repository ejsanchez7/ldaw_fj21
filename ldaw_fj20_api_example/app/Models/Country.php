<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model{

    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un país puede tener muchos autores
    public function authors(){
        return $this->hasMany(Author::class);
    }

    /*************
        MÉTODOS
    **************/

    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

}
