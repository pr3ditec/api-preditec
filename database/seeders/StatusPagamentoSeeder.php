<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["status" => "EM ANDAMENTO"],
            ["status" => "ATRASADO"],
            ["status" => "CONCLUIDO"]
        ];

        DB::table('status_pagamento')->insert($data);
    }
}
