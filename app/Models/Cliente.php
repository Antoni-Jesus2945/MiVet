<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model{
    
    protected $table="cliente";
    protected $primaryKey="id";
    protected $filltable=["nombre","apellidos","dni","telefono","domicilio", "correo"];
    
    //esto es para decirle a laravel que no voy a trabjara con las columnas timestamps
    public $timestamps=false;
}