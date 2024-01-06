<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServico extends Model
{
    use HasFactory;

    protected $table = 'tipo_servico';
    protected $guarded = [];
}
