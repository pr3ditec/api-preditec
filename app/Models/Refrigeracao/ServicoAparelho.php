<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoAparelho extends Model
{
    use HasFactory;

    protected $table = 'servico_aparelho';
    protected $guarded = [];
}
