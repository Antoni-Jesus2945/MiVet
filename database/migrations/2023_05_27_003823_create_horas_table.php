<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorasTable extends Migration
{
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->time('horas');
        });

        // Insertar registros predefinidos desde las 10:00 hasta las 14:30 con media hora de diferencia para ello hacemos un bucle for
        //empezando desde las 10 hasta las 14 aumnetando las horas y otro for para los minutos cogiendo desde el cero y aumentando 30 hasta llegar a 60
        for ($hour = 10; $hour <= 14; $hour++) {
            for ($minute = 0; $minute < 60; $minute += 30) {
                $time = sprintf("%02d:%02d", $hour, $minute);
                DB::table('horas')->insert(['horas' => $time]);
            }
        }

        // Insertar registros predefinidos desde las 16:00 hasta las 20:30
        for ($hour = 16; $hour <= 20; $hour++) {
            for ($minute = 0; $minute < 60; $minute += 30) {
                $time = sprintf("%02d:%02d", $hour, $minute);
                DB::table('horas')->insert(['horas' => $time]);
            }
        }
    }

    public function down()
    {
        Schema::dropIfExists('horas');
    }
}
