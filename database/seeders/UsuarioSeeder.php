<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "nome" => "admin",
                "email" => "admin@email.com",
                "tipo_usuario_id" => 1
            ],
            [
                "nome" => "preditec",
                "email" => "preditec@email.com",
                "tipo_usuario_id" => 2
            ],
        ];

        DB::table('usuario')->insert($data);
    }
}
