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

        ];

        DB::table('tipo_servico')->insert($data);
    }
}
