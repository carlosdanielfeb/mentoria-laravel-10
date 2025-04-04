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
        ['nome' => 'Ana Pereira', 'email' => 'ana.pereira@email.com', 'endereço' => 'Rua das Palmeiras, 567', 'logadouro' => 'Alameda Verde', 'cep' => '11020-300', 'bairro' => 'Jardim Botânico'],
        ['nome' => 'Bruno Mendes', 'email' => 'bruno.mendes@email.com', 'endereço' => 'Av. Rio Branco, 1000', 'logadouro' => 'Avenida Principal', 'cep' => '20040-070', 'bairro' => 'Centro'],
        ['nome' => 'Fernanda Costa', 'email' => 'fernanda.costa@email.com', 'endereço' => 'Rua das Acácias, 45', 'logadouro' => 'Travessa Azul', 'cep' => '30431-150', 'bairro' => 'Savassi'],
        ['nome' => 'Ricardo Alves', 'email' => 'ricardo.alves@email.com', 'endereço' => 'Rua dos Pioneiros, 22', 'logadouro' => 'Rodovia Norte', 'cep' => '87030-200', 'bairro' => 'Zona Industrial'],
        ['nome' => 'Letícia Nunes', 'email' => 'leticia.nunes@email.com', 'endereço' => 'Avenida das Nações, 300', 'logadouro' => 'Praça do Sol', 'cep' => '40050-000', 'bairro' => 'Barra'],
        ['nome' => 'Eduardo Lima', 'email' => 'eduardo.lima@email.com', 'endereço' => 'Rua do Comércio, 765', 'logadouro' => 'Boulevard Central', 'cep' => '89012-345', 'bairro' => 'Centro Histórico'],
        ['nome' => 'Patrícia Rocha', 'email' => 'patricia.rocha@email.com', 'endereço' => 'Travessa das Águas, 98', 'logadouro' => 'Avenida Beira-Mar', 'cep' => '57035-000', 'bairro' => 'Ponta Verde'],
        ['nome' => 'Gustavo Ferreira', 'email' => 'gustavo.ferreira@email.com', 'endereço' => 'Rua da Paz, 123', 'logadouro' => 'Jardim Europa', 'cep' => '60025-100', 'bairro' => 'Meireles'],
        ['nome' => 'Camila Martins', 'email' => 'camila.martins@email.com', 'endereço' => 'Alameda das Rosas, 88', 'logadouro' => 'Parque das Árvores', 'cep' => '15045-800', 'bairro' => 'Boa Vista'],
        ['nome' => 'Fábio Oliveira', 'email' => 'fabio.oliveira@email.com', 'endereço' => 'Rua do Sol, 11', 'logadouro' => 'Praça Central', 'cep' => '77021-340', 'bairro' => 'Plano Diretor'],
    ]);
}

}
