<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nome' => mb_strtoupper('admin emrpesa teste'),
                'email' => "detclouAdmin@email.com",
                'senha' => 'admin123',
                "tipo_id" => '1',
            ],
            [
                'nome' => mb_strtoupper('cliente empresa teste'),
                'email' => "cliente@email.com",
                'senha' => 'cliente123',
                "tipo_id" => '6',
            ],
            [
                'nome' => mb_strtoupper('tecnico empresa teste'),
                'email' => "tecnico@email.com",
                'senha' => 'tecnico123',
                "tipo_id" => '4',
            ],
            [
                'nome' => mb_strtoupper('acompanhante empresa teste'),
                'email' => "acompanhante@email.com",
                'senha' => 'acompanhante123',
                "tipo_id" => '7',
            ],
        ];

        //     foreach ($data as $usuario) {
        //         $novoUsuario = StatusUsuarioSeeder::create([
        //             'nome' => $usuario['nome'],
        //             'email' => $usuario['email'],
        //             'senha' => Hash::make($usuario['senha']),
        //         ]);

        //         UsuarioTipo::create([
        //             "usuario_id" => $novoUsuario['id'],
        //             "tipo_usuario_id" => $usuario['tipo_id'],
        //         ]);

        //         UsuarioEmpresa::create([
        //             "usuario_id" => $novoUsuario['id'],
        //             "empresa_id" => '1',
        //         ]);
        // }

    }
}
