<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AparelhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => mb_strtoupper("Ar Split"), "modelo" => "", "usuario_id" => "2"],
            ["nome" => mb_strtoupper("Ar Portatil"), "modelo" => "", "usuario_id" => "2"],
            ["nome" => mb_strtoupper("Ar Piso Teto"), "modelo" => "", "usuario_id" => "2"],
            ["nome" => mb_strtoupper("Ar Dutado"), "modelo" => "", "usuario_id" => "2"],
            ["nome" => mb_strtoupper("Ar Janela"), "modelo" => "", "usuario_id" => "2"],

        ];

        DB::table("aparelho")->insert($data);
    }
}
