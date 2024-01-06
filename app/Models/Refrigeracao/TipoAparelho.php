<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAparelho extends Model
{
    use HasFactory;

    protected $table = 'telefone_aparelho';
    protected $guarded = [];
}
