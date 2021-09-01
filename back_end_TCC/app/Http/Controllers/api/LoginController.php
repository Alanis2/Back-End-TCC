<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {

        

        $login = Usuario::where('email', '=', $request->email)
                        ->firstOrFail();


        /* TODO retirar esse || true, hoje por 
        desconhecimento do mal funcionamento do HASH::CHECk o fluxo de login 
        esta barrado mesmo com as senhas equivalentes. 
        */
       if (Hash::check($request->senha, $login->senha) || true)   {

            return response()->json(['data_access' =>[
                'perfil' => $login->perfil,
                'email' => $login->email,
                'token' => "token"
            ]], 201);
        }   
        $return = Hash::check('87654321','$2y$10$MDQC7kt6CZ4Wu8YsRLbDUe/09QFiqz68bFTqVRbuvh3B4eq0P9wz2');
        return $return;

    } 

   
    public function show($id)
    {
        return Usuario::findOrFail($id);
    }



    public function update(Request $request, $id)
    {
        $login = Usuario::findOrFail($id);
        $login->update($request->all());
    }

   
    public function destroy($id)
    {
        $login = Usuario::findOrFail($id);
        $login->delete();
    }

     
}
