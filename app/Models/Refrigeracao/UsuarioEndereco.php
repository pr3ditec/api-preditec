<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioEndereco extends Model
{
    use HasFactory;

    protected $table = 'usuario_endereco';
    protected $guarded = [];
}
