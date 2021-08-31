<?php

namespace App\Models\ModelsUsers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastrarUsuario extends Model
{
    protected $fillable = [
        'id',
        'perfil',
        'email',
        'senha'

    ];
    use HasFactory;

    public function rules()
    {
        return[
            'perfil' => 'required',
            'email' => 'required',
            'senha' => 'required'
        ];
    }
    
}
