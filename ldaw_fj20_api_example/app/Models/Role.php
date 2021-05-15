<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model{
    use HasFactory;

    /*******************
        CONFIGURACIÓN
    ********************/

    //Desactivar los timestamps
    public $timestamps = false;

    /******************
        ASOCIACIONES
    *******************/

    //Un rol puede tener muchos usuarios
    public function users(){
        return $this->hasMany(User::class);
    }

    //Un rol puede tener muchos privilegios N a N
    public function privileges(){
        return $this->belongsToMany(Privilege::class,"privileges_roles");
    }


    /*************
        MÉTODOS
    **************/

    /***********************
        MÉTODOS ESTÁTICOS
    ************************/

}
