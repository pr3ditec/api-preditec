<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => "Prefeitura Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Projeto Viva", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Posto de Saude", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Bradesco", "status_cliente_id" => 1, "usuario_id" => "1"],
        ];

        DB::table('cliente')->insert($data);
    }
}
