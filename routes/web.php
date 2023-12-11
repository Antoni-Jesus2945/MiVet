<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedirCitaController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CitasClienteController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\RegistroDiagnosticoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('/clinica.contacto');
});

Route::get('/prueba', function () {
    return view('/clinica.prueba');
});





Route::get('/clinica',function (){
    return view('clinica.formularioClientes');
});

Route::get("login", function(){
    return view('clinica.login');
});

Route::post('logout',[LoginController::class,'logout']);

Route::post('login',[LoginController::class,'login']);

Route::get('/citas/{citaId}/clientes', [CitasController::class, 'obtenerClientes']);

Route::resource("/registro",RegistroController::class);

//ruta del controlador semana y su clases.
Route::resource("/dias", PedirCitaController::class);

Route::resource("/verCita", CitasClienteController::class);


Route::resource("/citas",CitasController::class);

Route::resource("/cliente",ClienteController::class);

Route::resource("/animal",AnimalController::class);


Route::resource("/Diagnostico",DiagnosticoController::class);

Route::resource("/rDiagnostico",RegistroDiagnosticoController::class);



