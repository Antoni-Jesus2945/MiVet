<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20);
            $table->string('apellidos',30);
            $table->string('dni',9)->unique();
            $table->integer('telefono');
            $table->string('domicilio',70);
            $table->string('correo',50)->unique();
        });


    DB::table('cliente')->insert([
        'id' => '1',
        'nombre' => 'administrador',
        'apellidos' => 'admin',
        'dni' => ' ',
        'telefono' => '958643219',
        'domicilio' => 'calle ',
        'correo' => 'admin@clinica.org',
    ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
