<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    public function index() {

        $clientes=Cliente::all();
        return view("clinica.cliente", compact("clientes"));

    }

    //eliminamos una vista
    public function destroy($id) {
        $clientes=Cliente::findOrFail($id);
        $clientes->delete();
        return redirect('/cliente');
    }




}
