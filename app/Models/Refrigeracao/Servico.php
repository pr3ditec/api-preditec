<?php

namespace App\Models\Refrigeracao;

use App\Models\LinkedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servico extends LinkedModel
{
    use HasFactory;

    protected $table = 'servico';
    protected $guarded = [];
}
