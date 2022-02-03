<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Database\Factories\ClienteFactory;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /*$cliente = new Cliente();
        $cliente->nome = 'Diogo2';
        $cliente->sobrenome = 'Valente2';
        $cliente->rua = 'Rua Estagiario2';
        $cliente->numero = '1112';
        $cliente->bairro = 'Jardim Parana2';
        $cliente->cidade = 'Curitiba2';
        $cliente->telefone = '4411999988772';
        $cliente->email = 'diogo@hotmail.com2';
        $cliente->save();
        */
        Cliente::factory()->count(100)->create();
    }
}

