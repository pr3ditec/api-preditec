<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormaPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => "BOLETO"],
            ["nome" => "PIX"],
            ["nome" => "CARTAO DEBITO"],
            ["nome" => "CARTAO CREDITO"],
            ["nome" => "DINHEIRO"],
            ["nome" => "DESCONHECIDO"],
        ];

        DB::table('forma_pagamento')->insert($data);
    }
}
