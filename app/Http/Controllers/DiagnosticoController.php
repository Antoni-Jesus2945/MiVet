<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosticos;
use App\Models\Animal;

class DiagnosticoController extends Controller
{
    public function index() {

        $animales=Animal::all();
        $id_animal = request()->input('id_animal');

        $diagnosticos = Diagnosticos::where('id_animal', $id_animal)->get();
        return view("clinica.listadoDiagnosticos", compact("diagnosticos","animales"));

    }

    //eliminamos una vista
    public function destroy($id) {
        $diagnosticos=Diagnosticos::findOrFail($id);
        $diagnosticos->delete();
        return redirect('/animal');
    }


    public function store(Request $request)
    {
        $diagnosticos=new Diagnosticos;
        $diagnosticos->patologias=$request->input("patologias");
        $diagnosticos->informe=$request->input("informe");
        $diagnosticos->fecha=$request->input("fecha");
        $diagnosticos->id_animal=$request->input("id_animal");
        $diagnosticos->save();
        return redirect('/animal');
    }

}
