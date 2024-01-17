<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(EstadoSeeder::class);
        $this->call(FormaPagamentoSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(StatusClienteSeeder::class);
        $this->call(StatusPagamentoSeeder::class);
        $this->call(StatusServicoSeeder::class);
        $this->call(TipoDocumentoSeeder::class);
        $this->call(TipoTelefoneSeeder::class);
        $this->call(TipoUsuarioSeeder::class);
        $this->call(StatusUsuarioSeeder::class);
        $this->call(CidadeSeeder::class);

        $this->call(UsuarioSeeder::class);

        $this->call(AparelhoSeeder::class);
        $this->call(TipoServicoSeeder::class);

        $this->call(ClienteSeeder::class);

    }
}
