<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    
    public function run(): void
    {
       User::create([
            'name' => 'Carlos',
            'email' => 'carlosinocencio.feb@gmail.com',
            'password' => Hash::make('Asdda@'),
        ]);

    }
}
