<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Usuario\User;  // Este no lo tiene el proyecto reglog
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function showregis()
    {
        return view('auth/register');
    }


   /* public function register(RegisterRequest $request){
        $user = User::create($request->validated());
    }*/

    public function register(RegisterRequest $request)
    {
        /*//Este método guarda los datos en la base de datos
        $user = User::create($request->validated());
        $user->email = $request->post('email');
        $user->username = $request->post('username');
        $user->password = $request->post('password');
        $user->password_confirmation = $request->post('password_confirmation');

        $user->save();

        return redirect()->route("registros/register")->with("success", "Creado con exito!");
        */

        $user = new User();
        $user->email = $request->validated->post('email');
        $user->username = $request->validated->post('username');
        $user->password = $request->validated->post('password');
        $user->password_confirmation = $request->validated->post('password_confirmation');

        return redirect()->route("registros.register")->with("success", "Agregado con exito!");
    }




}
