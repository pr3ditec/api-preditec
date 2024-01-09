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
            ["nome" => mb_strtoupper('Adaptacao valvula descongelante'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Valvula reversora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Vazamento no capilar'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Venda'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Instalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Higienizacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Adaptacao sem valvula versora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Helice'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Nivelamento'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reinstalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Capacitor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Carga de gas NH'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Desobstruir condensadora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Fio trocado da valvula reversora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Retirar'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Solenoide'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Aperto de porcas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Protetor termico'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reparo motor ventilacao exterior montagem'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reparo tubulacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Bolezina'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Valvula de servico'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Vazamento'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Camara de ventilacao'), "usuario_id" => 2],


        ];

        DB::table('tipo_servico')->insert($data);
    }
}
