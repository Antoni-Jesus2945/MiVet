<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{

    public function index() {

        $animales=Animal::all();
        return view("clinica.listadoAnimales", compact("animales"));

    }

    //eliminamos una vista
    public function destroy($id) {
        $animales=Animal::findOrFail($id);
        $animales->delete();
        return redirect('/animal');
    }




}

