<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Dados de exemplo para a tabela 'classes'
        DB::table('classes')->insert([
            [
                'type' => 'A',  
                'title' => 'Aula de Surf - Iniciação',
                'state' => 'A', 
                'location' => 'Praia S. Pedro de Moel',
                'duration' => 2, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'M',
                'title' => 'Aula de Surf - Intermediário',
                'state' => 'A', 
                'location' => 'Praia de Carcavelos',
                'duration' => 3, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'B',
                'title' => 'Aula de Surf - Avançado',
                'state' => 'A', 
                'location' => 'Praia do Guincho',
                'duration' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'A',
                'title' => 'Aula de Surf - Iniciação',
                'state' => 'H', 
                'location' => 'Praia de Santa Cruz',
                'duration' => 2,
                'created_at' => Carbon::now()->subDays(5), 
                'updated_at' => Carbon::now()->subDays(5),
            ],
        ]);
    }
}
