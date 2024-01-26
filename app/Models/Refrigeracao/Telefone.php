<?php

namespace App\Models\Refrigeracao;

use App\Models\LinkedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Telefone extends LinkedModel
{
    use HasFactory;

    protected $table = 'telefone';
    protected $guarded = [];
}
