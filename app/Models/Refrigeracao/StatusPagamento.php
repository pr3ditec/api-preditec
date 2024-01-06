<?php

namespace App\Models\Refrigeracao;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPagamento extends Model
{
    use HasFactory;

    protected $table = 'status_pagamento';
    protected $guarded = [];
}
