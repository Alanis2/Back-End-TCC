<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ModelsItens\CadastrarItens;

class CadastrarItensController extends Controller
{
    public function index()
    {
        return CadastrarItens::all();
    }

    public function store(Request $request)
    {
        CadastrarItens::create($request->all());
    }

   
    public function show($id)
    {
        return CadastrarItens::findOrFail($id);
    }



    public function update(Request $request, $id)
    {
        $CadastroItens = CadastrarItens::findOrFail($id);
        $CadastroItens->update($request->all());
    }

   
    public function destroy($id)
    {
        $CadastroItens = CadastrarItens::findOrFail($id);
        $CadastroItens->delete();
    }
}
