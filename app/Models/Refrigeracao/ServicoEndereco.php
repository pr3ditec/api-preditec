<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoEndereco extends Model
{
    use HasFactory;

    protected $table = 'servico_endereco';
    protected $guarded = [];
}
