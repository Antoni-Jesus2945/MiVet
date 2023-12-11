<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;

class CitasClienteController extends Controller
{
    public function index()
    {
        // Get all appointments for the current user
        // Obtener el usuario autenticado
        $user = auth()->user();

        // Obtener el nombre de usuario
        $nombreUsuario = $user->name;

        $cita = Citas::where('nombreA', '=', "$nombreUsuario")->get();

        return view('clinica.VerCita', compact('cita'));
    }
    public function generarPdf($id)
    {
        // Obtener la cita
        $cita = Citas::find($id);

        // Generar el PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('clinica.pruebaPdf', compact('cita')));
        $dompdf->render();
        $dompdf->stream('cita.pdf');
    }
}
