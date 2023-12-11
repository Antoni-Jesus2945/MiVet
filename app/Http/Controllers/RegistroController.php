<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\Cliente;
use App\Models\User;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $animales=Animal::all();
        $clientes=Clientes::all();
        return compact($animales,$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes=new Cliente;
        $clientes->nombre=$request->input("nombre");
        $clientes->apellidos=$request->input("apellidos");
        $clientes->dni=$request->input("dni");
        $clientes->telefono=$request->input("telefono");
        $clientes->domicilio=$request->input("domicilio");
        $clientes->correo=$request->input("correo");
        $clientes->save();

        $animales=new Animal;
        $animales->Nºchip=$request->input("Nºchip");
        $animales->tipoA=$request->input("tipoA");
        $animales->raza=$request->input("raza");
        $animales->nombre=$request->input("NombreA");
        $animales->peso=$request->input("peso");
        $animales->edad=$request->input("edad");
        $animales->sexo=$request->input("sexo");
        $animales->esterilizado=$request->input("esterilizado");
        $animales->id_cliente= $clientes->id;
        $animales->save();

        $usuarios=new User;
        $usuarios->name=$request->input("nombre");
        $usuarios->email=$request->input("correo");
        $usuarios->password=$request->input("dni");
        $usuarios->id_cliente= $clientes->id;
        $usuarios->save();
        //devolvemos un mensaje por pantalla

        return view('clinica/registroCliente');

    }
}
