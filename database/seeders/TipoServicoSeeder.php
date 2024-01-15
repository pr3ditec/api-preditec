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
            ["nome" => mb_strtoupper('Problema no sensor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Defeito de fabrica'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Compressor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Chave seletora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Desinstalacao'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Troca filtro'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Ar e cortina'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('linha de passagem'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Fusivel'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Placa'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Refazer Eletrica'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Colocar Tomada'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('motor ventilaçao condesadora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('ponte 1-4'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Troca valvula'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Terminal eletrico motor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Troca canos aluminio'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Valvula entupida'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('motor ventilaçao evaporadora'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('porcas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('sensor degelo'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('sensor ambiente'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('sensor serpentina'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('placa interface'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('ligacao eletrica'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('limpar filtros'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('controle remoto universal'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Desemtupir dreno'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Capacitor compressor'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Reparo no transformador'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Motor ventilacao externa'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Solda evaporador'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Conserto'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Pilhas'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Placa potencia'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Sensor Evaporador'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Mudar condensadora de lugar'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('Mudar evaporador de lugar'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('bimetal'), "usuario_id" => 2],
            ["nome" => mb_strtoupper('canaletas'), "usuario_id" => 2],


        ];

        DB::table('tipo_servico')->insert($data);
    }
}
