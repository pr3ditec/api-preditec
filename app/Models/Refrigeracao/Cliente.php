<?php

namespace App\Models\Refrigeracao;

use App\Models\LinkedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends LinkedModel
{
    use HasFactory;

    protected $table = 'cliente';
    protected $guarded = [];
}
