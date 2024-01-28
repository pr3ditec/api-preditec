<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
                "tipo_usuario_id" => 1,
                "status_usuario_id" => 1,
                "senha" => Hash::make("admin123")
            ],
            [
                "nome" => "preditec",
                "email" => "preditec@email.com",
                "tipo_usuario_id" => 2,
                "status_usuario_id" => 1,
                "senha" => Hash::make('preditec123')
            ],
        ];

        DB::table('usuario')->insert($data);
    }
}
