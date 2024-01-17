<?php

namespace Database\Seeders;

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
            ["nome" => mb_strtoupper("Desconhecido"), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Higienizacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Carga de gas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Capacitor do ventilador'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Instalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Desinstalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Venda'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Rolamento do motor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Placa universal'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Capacitor do evaporador'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Vacuo'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Sensor temperatura'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Capacitor do compressor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Rec placa potencia'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reposicao de gas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Rele falta de fase'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Valvula'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Vazamento'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Ajustar dreno'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Pre instalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Rec interface botoes'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reparo na placa'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Bomba de dreno'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Deslocamento'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Motor ventilador'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('rec Placa display'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Troca'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Turbina'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Controle'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reparo cabo de energia'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Helice'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reparo eletrico'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Visita'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('terminais compressor e capacitor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('sensores'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('solda'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('protetor termico'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('desentupir dreno'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('limpeza'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('fonte motor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('carenagem frontal condensadora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('garantia'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Pilhas'), "usuario_id" => 2],



        ];

        DB::table('tipo_servico')->insert($data);
    }
}
