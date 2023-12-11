<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosticos extends Model
{
    protected $table="diagnostico";
    protected $primaryKey="id";
    protected $filltable=["patologias","informe","fecha"];

    //esto es para decirle a laravel que no voy a trabjara con las columnas timestamps
    public $timestamps=false;
}
