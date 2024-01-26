<?php

namespace App\Models\Refrigeracao;

use App\Models\LinkedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Endereco extends LinkedModel
{
    use HasFactory;

    protected $table = 'endereco';
    protected $guarded = [];
}
