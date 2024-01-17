<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ["nome" => mb_strtoupper('Desconhecido'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Ivoti'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Linha Nova'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Lindolfo Collor'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Campo Bom'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Novo Hamburgo'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Dois irmaos'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Canoas'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Estancia Velha'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Presidente Lucena'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Sao sebastiao do Cai'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Sao jose do hortencio'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Portao'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Feliz'), "estado_id" => "21"],
            ["nome" => mb_strtoupper('Sao Leopoldo'), "estado_id" => "21"],


        ];

        DB::table('cidade')->insert($data);
    }
}
