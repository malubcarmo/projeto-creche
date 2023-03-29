<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResponsavelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('responsaveis')->insert([
            'email' => 'aleolhaaqui@gmail.com',
            'senha' => 'banana'
        ]);
    }
}
