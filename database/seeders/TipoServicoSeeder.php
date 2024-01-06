<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => mb_strtoupper('Limpeza'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Solda'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Gas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Valvula descongelante'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Carga de Gas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Suporte'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Helice micro motor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Adaptacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Valvula reversora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Vazamento no capilar'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Venda'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Instalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Higienizacao'), "usuario_id" => 2],

        ];

        DB::table('cliente')->insert($data);
    }
}
