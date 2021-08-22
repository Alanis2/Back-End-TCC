<?php

namespace App\Models\ModelsItens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastrarItens extends Model
{
    protected $fillable = [
        'nome',
        'image',
        'quantidade',
        'descricao',
    ];
    use HasFactory;
}
