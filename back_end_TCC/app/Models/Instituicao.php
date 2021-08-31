<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $fillable = [
        'nome',
        'CNPJ',
        'dtFundamento',
        'telefone',
        'rua',
        'numero',
        'complemneto',
        'cidade',
        'estado',
        'CEP',
        'email',
        'senha',
    ];
    use HasFactory;
}
