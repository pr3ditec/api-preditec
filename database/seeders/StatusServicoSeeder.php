<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["status" => "CANCELADO - CLIENTE"],
            ["status" => "CANCELADO - EMPRESA"],
            ["status" => "ADIADO"],
            ["status" => "CONCLUIDO"]
        ];

        DB::table('status_servico')->insert($data);    }
}
