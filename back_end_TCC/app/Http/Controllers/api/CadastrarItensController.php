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
        //
    }

   
    public function show($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
