<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dias;
use App\Models\Horas;


//creo el controllador de semana que tendra dos modulos en este caso sera el modulo de dias y de horas que son dos tablas distintas 
class PedirCitaController extends Controller
{
    public function index() {//en la clase index le voy agregar una vista para la ruta de donde tengo el formulario con la plantilla blade
        //uso la funcion de compact esto lo trae integrado y programdo laravel , hago referencia a las variables
       
        //con el uso de la clase del model y el all hago un elocuent para coger todo el objeto de esa clase y luego reailizar cosas
        $dia= Dias::all();
        $hora=Horas::all();
        return view("clinica.pedirCita", compact("dia", "hora"));//importnate poner la ruta en el web.php
    }
    
    
    
}
