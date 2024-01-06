<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["tipo" => "ADMIN"],
            ["tipo" => "EMPRESA"],
        ];

        DB::table('tipo_usuario')->insert($data);
    }
}
