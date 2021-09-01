<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [
        'nomeFantasia',
        'razaoSocial',
        'focoInstitucional',
        'CNPJ',
        'bannerImage',
        'dtFundacao',
        'telefone',
        'rua',
        'numero',
        'complemento',
        'cidade',
        'estado',
        'CEP',
        'email',
        'senha',
        'user_id'
    ];

    public function rules()
    {
        return[
            'nomeFantasia' => 'required',
            'razaoSocial' => 'required',
            'focoInstitucional' => 'required',
            'CNPJ'=> 'required|unique:doadors',
            'dtFundadao'  => 'required',
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
