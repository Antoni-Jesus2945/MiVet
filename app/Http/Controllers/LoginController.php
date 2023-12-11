<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{

    public function login(Request $request) {

        //validamos si no se envia nada
        $request->validate([
        'email' => 'required|email',
        'password' => 'required',
         ],[//los mensajes que saldran por pantalla usando el required y el email ya definido en laravel para validar
        'email.required' => 'El campo de correo electrónico es obligatorio.',
        'email.email' => 'Por favor, ingresa una dirección de correo electrónico válida.',
        'password.required' => 'El campo de contraseña es obligatorio.',
        ]);
        //validamos el email del objeto user y lo guardamos en la variable user
        $user = User::where('email', $request->email)->first();

        if (!$user) {
        // El usuario no existe, muestra un mensaje de error
        //hago uso del redirect y del witherrors para mostrar este mensaje luego en el formulario
        return redirect()->back()->withErrors(['email' => 'Credenciales invalidas']);
    }



    //si la contraseña no tiene su hash la encriptamos , comprobamos que la contraseña que ha puesto el usuario en texto plano existe en la base de datos
       if($user->password==$request->password){
           //actualizamos el registro de ser necesario y le añadimos su hash.
        $user->update(['password' => Hash::make($request->password)]);
        }

        //despues checkeamos el hash con las clases y metodos definidos del hash en la ruta importada facecades
        if (Hash::check($request->password, $user->password)) {
        // La contraseña es correcta, iniciar sesión
            Auth::login($user);
            return redirect('/');
    }else{//si algo falla mostramos de nuevo el error de credenciales invalidas pero en este caso en el password
        return redirect()->back()->withErrors(['password' => 'Credenciales inválidas']);
    }

        }





        public function logout(){
            Auth::logout();

            return redirect('/')->with('status',"has cerrado sesion de forma correcta");
        }

    }



