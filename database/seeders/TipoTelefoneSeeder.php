<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTelefoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["tipo" => "FIXO"],
            ["tipo" => "CELULAR"],
            ["tipo" => "CELULAR - WHATSAPP"]
        ];

        DB::table('tipo_telefone')->insert($data);
    }
}
