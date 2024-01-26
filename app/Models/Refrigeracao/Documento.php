<?php

namespace App\Models\Refrigeracao;

use App\Models\LinkedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Documento extends LinkedModel
{
    use HasFactory;

    protected $table = 'documento';
    protected $guarded = [];
}
