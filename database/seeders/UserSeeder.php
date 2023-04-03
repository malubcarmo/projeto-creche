<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('users')->insert([
            'name' => 'Andre',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('12345678'),
            'profile' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Luis',
            'email' => 'luisfelipesct@gmail.com',
            'password' => Hash::make('feliz9813'),
            'profile' => 'responsavel'
        ]);

        DB::table('users')->insert([
            'name' => 'Erick',
            'email' => 'eridanpersan@com',
            'password' => Hash::make('DashPontoDash'),
            'profile' => 'responsavel'
        ]);
    }
}
