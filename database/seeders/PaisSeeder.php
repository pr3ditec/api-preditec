<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => "BRASIL"],
            ["nome" => "ARGENTINA"],
            ["nome" => "PARAGUAI"],
            ["nome" => "URUGUAI"],
        ];

        DB::table('pais')->insert($data);
    }
}
