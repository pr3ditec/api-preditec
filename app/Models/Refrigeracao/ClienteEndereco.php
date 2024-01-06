<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteEndereco extends Model
{
    use HasFactory;

    protected $table = 'cliente_endereco';
    protected $guarded = [];
}
