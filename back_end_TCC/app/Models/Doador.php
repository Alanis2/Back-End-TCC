<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $fillable = [
        'nome',
        'CPF',
        'dtNasc',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'CEP',
        'user_id',
    ];

    public function rules()
    {
        return[
            'nome' => 'required',
            'CPF' => 'required|unique:doadors',
            'dtNascimento' => 'required',
            'telefone' => 'required',
            'rua' => 'required',
            'numero' => 'required',
            'complemento' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'CEP' => 'required',
            'user_id' => ''
        ];
    }
    
    use HasFactory;
}
