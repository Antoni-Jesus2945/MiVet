<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosticos;
use App\Models\Animal;

class RegistroDiagnosticoController extends Controller
{
    public function index() {

        $animales=Animal::all();
        $id_animal = request()->input('id_animal');

        $diagnosticos = Diagnosticos::where('id_animal', $id_animal)->get();
        return view("clinica.registrodDiagnostico", compact("diagnosticos","animales"));

    }

}
