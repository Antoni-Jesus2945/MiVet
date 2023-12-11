<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Citas;
use App\Models\Cliente;

class CitasController extends Controller
{
    //
    public function index() {

        $citas= Citas::all();

        //foreach ($citas->horas as $hora) {
        //$hora->horas = Carbon::parse($hora->horas)->format('H:i'); // Formatea la hora en formato '16:00'
        //}
        return view("clinica.listadoCitas", compact("citas"));

    }

    //creo la funcion store para guardar los registros del post en la tabla de citas
    public function store(Request $request) {

       try{
        $cita=new Citas;
        $cita->dias=$request->input("semana");
        $cita->horas=$request->input("horas");
        $cita->nombreA=$request->input("nombre");
        $cita->save();
        return redirect('/');
       } catch (\Illuminate\Database\QueryException $e) {
        if ($e->errorInfo[1] == 1062) {
        // Valor duplicado en la columna "horas"
        $mensaje = 'Ya existe una cita programada a las '. $cita->horas=$request->input("horas");
        // Maneja el mensaje de error como desees, por ejemplo, mostrándolo en la vista
        return redirect('/dias')->with('error', $mensaje);
        } else {
        // Otro error de base de datos
        // Puedes manejarlo de manera diferente si lo deseas
        // Por ejemplo, lanzando una nueva excepción o registrando el error
         throw $e;
        }
        }

    }

    //funcion edit para al darle editar me guarde la informacion de la vista
    public function edit($id) {

        $cita=Citas::findOrFail($id);
    return view('clinica.editar', compact('cita'));

    }
    //con la funcion update actualizamos la cita una en concreto
    public function update(Request $request,$id ) {

        $cita=Citas::findOrFail($id);
        $cita->dias=$request->input("semana");
        $cita->horas=$request->input("horas");
        $cita->nombreA=$request->input("nombre");
        $cita->save();

        return redirect('/citas');


    }

    //eliminamos una vista
    public function destroy($id) {
        $cita=Citas::findOrFail($id);
        $cita->delete();
        return redirect('/citas');
    }


    public  function obtenerCitaCliente($citaNombreA){
        $citas=Citas::where('nombreA',$citaNombreA)->get();
        return view("clinica.listadoCitaCliente", compact("citas"));
    }

    //creo la funcion
    public function obtenerClientes($citaId){
    // Obtener los clientes basados en el ID de la cita
    $cliente = Cliente::where('nombre', $citaId)->get();

    // Puedes retornar los clientes en formato JSON
    return response()->json($cliente);
    }

}


