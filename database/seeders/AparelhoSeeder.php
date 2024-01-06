<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ["nome" => "Ar Condicionado", "modelo" => "", "usuario_id" => "2"],
            ["nome" => "Ar Split", "modelo" => "", "usuario_id" => "2"],

        ];

        DB::table("aparelho")->insert($data);
    }
}
