<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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
    use HasFactory;
}
