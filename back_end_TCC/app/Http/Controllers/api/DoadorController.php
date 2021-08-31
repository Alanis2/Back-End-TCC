<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doador;
use App\Models\ModelsUsers\CadastrarUsuario;
use Illuminate\Support\Facades\Hash;

use Validator;

class DoadorController extends Controller

{

    public function __construct(Doador $doador, Request $request)
    {
        $this->doador = $doador;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->doador->all();
        return response()->json($data);

        
    }

    public function store(Request $request)
    {

        $user = CadastrarUsuario::create([
            'perfil' =>"DOADOR",
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->password)
        ]);
        

        if($user == null ) {
            return response()->json(['error' => $user->messages() ], 400);
        } else {
           


            $doador = Doador::create([
                'nome' => $request->nome,
                'CPF' => $request->CPF,
                'dtNasc' => $request->dtNasc,
                'telefone' => $request->telefone,
                'rua' => $request->rua,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
                'CEP' => $request->CEP,
                'password' => Hash::make($request->password),
                'user_id' => $user->id 
            ]);
            return response()->json(['$user' => $doador], 201);

        }
    }


    public function show($id)
    {
        if (!$data = $this->doador->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }



    public function update(Request $request, $id)
    {
        $data = Doador::findOrFail($id);

        if (!$data = $this->doador->find($id))
            return response()->json(['error' => 'Nada foi encontrado'], 404);
      

        $data->update($request->all());
        return response()->json($request->all(), 201);
    }


    public function destroy($id)
    {
        if (!$data = $this->doador->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
        $data->delete();
        return response()->json(['success' => 'Deletado com sucesso!']);
    }


}
