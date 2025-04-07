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
        ['nome' => 'Ana Pereira', 'email' => 'ana.pereira@email.com', 'endereco' => 'Rua das Palmeiras, 567', 'logradouro' => 'Alameda Verde', 'cep' => '11020-300', 'bairro' => 'Jardim Botânico'],
        ['nome' => 'Bruno Mendes', 'email' => 'bruno.mendes@email.com', 'endereco' => 'Av. Rio Branco, 1000', 'logradouro' => 'Avenida Principal', 'cep' => '20040-070', 'bairro' => 'Centro'],
        ['nome' => 'Fernanda Costa', 'email' => 'fernanda.costa@email.com', 'endereco' => 'Rua das Acácias, 45', 'logradouro' => 'Travessa Azul', 'cep' => '30431-150', 'bairro' => 'Savassi'],
        ['nome' => 'Ricardo Alves', 'email' => 'ricardo.alves@email.com', 'endereco' => 'Rua dos Pioneiros, 22', 'logradouro' => 'Rodovia Norte', 'cep' => '87030-200', 'bairro' => 'Zona Industrial'],
        ['nome' => 'Letícia Nunes', 'email' => 'leticia.nunes@email.com', 'endereco' => 'Avenida das Nações, 300', 'logradouro' => 'Praça do Sol', 'cep' => '40050-000', 'bairro' => 'Barra'],
        ['nome' => 'Eduardo Lima', 'email' => 'eduardo.lima@email.com', 'endereco' => 'Rua do Comércio, 765', 'logradouro' => 'Boulevard Central', 'cep' => '89012-345', 'bairro' => 'Centro Histórico'],
        ['nome' => 'Patrícia Rocha', 'email' => 'patricia.rocha@email.com', 'endereco' => 'Travessa das Águas, 98', 'logradouro' => 'Avenida Beira-Mar', 'cep' => '57035-000', 'bairro' => 'Ponta Verde'],
        ['nome' => 'Gleamila Martins', 'email' => 'camila.martins@email.com', 'endereco' => 'Alameda das Rosas, 88', 'logradouro' => 'Parque das Árvores', 'cep' => '15045-800', 'bairro' => 'Boa Vista'],
        ['nome' => 'Fábio Oliveira', 'email' => 'fabio.oliveira@email.com', 'endereco' => 'Rua do Sol, 11', 'logradouro' => 'Praça Central', 'cep' => '77021-340', 'bairro' => 'Plano Diretor'],
    ]);
}

}
