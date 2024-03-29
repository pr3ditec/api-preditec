<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["status" => "ATIVO"],
            ["status" => "INATIVO"],
            ["status" => "BLOQUEADO"],
        ];

        DB::table('status_usuario')->insert($data);

    }
}
