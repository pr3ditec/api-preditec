<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["tipo" => "RG"],
            ["tipo" => "CPF"],
            ["tipo" => "CNH"]
        ];

        DB::table('tipo_documento')->insert($data);
    }
}
