<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nºchip',15)->unique();
            $table->string('tipoA',15);
            $table->string('raza',30);
            $table->string('nombre',15);
            $table->integer('peso');
            $table->integer('edad');
            $table->char('sexo', 1);
            $table->char('esterilizado',2);
            $table->unsignedInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal');
    }
}
