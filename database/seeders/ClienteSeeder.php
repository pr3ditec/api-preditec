<?php

namespace Database\Seeders;

use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["nome" => "Desconhecido", "status_cliente_id" => 1, "usuario_id" => "1"],

        ];

        try {
            DB::table('cliente')->insert($data);
        } catch (Exception $e) {
            echo ($e);
        }
    }
}
