<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email', 'paulorogeriojp@gmail.com')->first()) {
            User::create([
                'name' => 'Paulo Rogério',
                'email' => 'paulorogeriojp@gmail.com',
                'password' => Hash::make('123456', ['round' => 12]),
            ]);
        }
        if(!User::where('email', 'bibi3dff@gmail.com')->first()) {
            User::create([
                'name' => 'Gabriel Alves',
                'email' => 'bibi3dff@gmail.com',
                'password' => Hash::make('123456', ['round' => 12]),
            ]);
        }
        if(!User::where('email', 'gugaalvesjp@gmail.com')->first()) {
            User::create([
                'name' => 'Gustavo Alves',
                'email' => 'gugaalvesjp@gmail.com',
                'password' => Hash::make('123456', ['round' => 12]),
            ]);
        }
        if(!User::where('email', 'admin@gmail.com')->first()) {
            User::create([
                'name' => 'Administrador',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456', ['round' => 12]),
            ]);
        }
    }
}
