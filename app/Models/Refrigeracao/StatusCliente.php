<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusCliente extends Model
{
    use HasFactory;

    protected $table = 'status_cliente';
    protected $guarded = [];
}
