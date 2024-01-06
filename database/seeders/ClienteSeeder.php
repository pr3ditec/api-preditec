<?php

namespace Database\Seeders;

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
            ["nome" => "Prefeitura", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Prefeitura Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Prefeitura Dois irmaos", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Prefeitura Lindolfo Collor", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Projeto Viva", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Posto de Saude", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Bradesco", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Banda Mexico Show", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Ines Prefeitura", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Departamento Tecnico Prefeitura", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Rodrigo Cortume", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Creche Prefeitura", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Romualdo", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Centrinho Prefeitura", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Olidam", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "José Carlos", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Alcirio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Uruguaio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Radio Colorense", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Alexandre", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Capivarinha", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Salao Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Mercado economico", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Guido Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Ezequiel Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Salao atras socaltur", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Aline - IEI", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Cleitmir", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Academia, Fabrica de protetores de lutas", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Batata", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Paulo Mohr", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Adelio Scherer", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Schmier Petry", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Lisete Scherer", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Vilmar ap", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Delmar piscina", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Rodrigo Salao", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Roseli - Sao jose do hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Andre - Sao jose do hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Sao jose hortencio - escritorio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Cristiane - Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Gabriel - Capivarinha", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Julcemar chalé - Ivoti", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "sjh", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Vanderlei - Sao jose do hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Besing", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Lauri", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Vilmar gas", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "koop", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Renato Baum", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Policia", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Bras", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Daniel Klein - Sao jose do hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Jose Franz - Sao jose do hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Geraldo Welter - Sao jose do hortencio", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Airton", "status_cliente_id" => 1, "usuario_id" => "1"],
            ["nome" => "Kern", "status_cliente_id" => 1, "usuario_id" => "1"],
        ];

        DB::table('cliente')->insert($data);
    }
}
