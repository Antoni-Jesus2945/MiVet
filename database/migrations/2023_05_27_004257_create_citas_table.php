<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('dias');
            $table->time('horas')->unique();
            $table->string('nombreA');
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
