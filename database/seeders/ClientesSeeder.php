<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClientesSeeder extends Seeder
{
   public function run(): void
{
    Cliente::insert([
        ['nome' => 'Victor Padovam', 'email' => 'ana.pereira@email.com', 'endereco' => 'Rua das Palmeiras, 567', 'logradouro' => 'Alameda Verde', 'cep' => '11020-300', 'bairro' => 'Jardim Botânico'],
        ]);
}

}
