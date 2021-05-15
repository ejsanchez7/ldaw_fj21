<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilege extends Model{

    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un privilegio puede estar asociado a muchos roles N a N
    public function roles(){
        return $this->belongsToMany(Role::class,"privileges_roles");
    }


    /*************
        MÉTODOS
    **************/

    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

}
