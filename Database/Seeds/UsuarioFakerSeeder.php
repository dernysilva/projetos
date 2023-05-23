<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioFakerSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();
        $faker = \Faker\Factory::create();

        $criaQuantosUsuarios = 50;
        $usuarioPush = [];
        for ($i = 0; $i < $criaQuantosUsuarios; $i++){
            array_push($usuarioPush, [
                'nome' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password_hash' => '123456', // alterar o fake seeder quando conhecermos a criptografia
                'ativo' => true,
            ]);
        }

       // echo '<pre>';
       // print_r($usuarioPush);
       // exit;

       $usuarioModel->skipValidation(true) // bypass na validação
                    ->protect(true) // desativando proteção dos campos
                    ->insertBatch($usuarioPush);

        echo "$criaQuantosUsuarios usuários criados com Sucesso!";    }
}
