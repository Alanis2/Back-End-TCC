<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Instituicao;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstituicaoController extends Controller
{
    public function __construct(Instituicao $instituicao, Request $request)
    {
        $this->instituicao = $instituicao;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->instituicao->all();
        return response()->json($data);

        
    }

    public function store(Request $request)
    {

        $user = User::create([
            'perfil' => "Instituicao",
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->password)
        ]);
        

        if($user == null ) {
            return response()->json(['error' => $user->messages() ], 400);
        } else {
           


            $instituicao = Instituicao::create([
                'nomeFantasia' => $request->nomeFantasia,
                'CNPJ' => $request->CNPJ,
                'razaoSocial' => $request->razaoSocial,
                'dtFundacao' => $request->dtFundacao,
                'telefone' => $request->telefone,
                'focoInstitucional' => $request->focoInstitucional,
                'banner_image' => $request->bannerImage,
                'rua' => $request->rua,
                'numero' => $request->numero,
                'complemento' => $request->complemento,
                'bairro' => $request->bairro,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
                'CEP' => $request->CEP,
                'password' => Hash::make($request->password),
                'user_id' => $user->id 
            ]);
            return response()->json(['$user' => $instituicao], 201);

        }
    }


    public function show($id)
    {
        if (!$data = $this->instituicao->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        } else {
            return response()->json($data);
        }
    }



    public function update(Request $request, $id)
    {
        $data = Instituicao::findOrFail($id);

        if (!$data = $this->doador->find($id))
            return response()->json(['error' => 'Nada foi encontrado'], 404);
      

        $data->update($request->all());
        return response()->json($request->all(), 201);
    }


    public function destroy($id)
    {
        if (!$data = $this->instituicao->find($id)) {
            return response()->json(['error' => 'Nada foi encontrado'], 404);
        }
        $data->delete();
        return response()->json(['success' => 'Deletado com sucesso!']);
    }
}
