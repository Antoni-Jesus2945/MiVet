<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasTable extends Migration
{
    public function up()
    {
        //usamos la funcion up para levantar el eschema y crear la tabla dias y su campo dias
        Schema::create('dias', function (Blueprint $table) {
            $table->string('dias');
        });

        // Insertar registros predefinidos al levantar la tabla
        DB::table('dias')->insert([
            ['dias' => 'lunes'],
            ['dias' => 'martes'],
            ['dias' => 'miércoles'],
            ['dias' => 'jueves'],
            ['dias' => 'viernes'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('dias');
    }
}
