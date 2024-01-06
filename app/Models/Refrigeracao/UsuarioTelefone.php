<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioTelefone extends Model
{
    use HasFactory;

    protected $table = 'usuario_telefone';
    protected $guarded = [];
}
