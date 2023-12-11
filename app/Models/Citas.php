<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    //use HasFactory;
    protected $table="citas";
    protected $primaryKey="id";
    protected $filltable=[
        "dias","horas","nombreA"
    ];
    
    //esto es para decirle a laravel que no voy a trabjara con las columnas timestamps
    public $timestamps=false;
}

