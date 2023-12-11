<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table="animal";
    protected $primaryKey="id";
    protected $filltable=["Nºchip","tipoA","raza","nombre","peso","edad"];
    
    //esto es para decirle a laravel que no voy a trabjara con las columnas timestamps
    public $timestamps=false;
}
