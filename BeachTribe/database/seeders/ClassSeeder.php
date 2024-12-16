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
                'date' => Carbon::now()->toDateString(),
                'price' => 25.00, 
                'duration' => 2, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'M',
                'title' => 'Aula de Surf - Intermediário',
                'state' => 'A', 
                'location' => 'Praia de Carcavelos',
                'date' => Carbon::now()->addMonth()->toDateString(),
                'price' => 35.00, 
                'duration' => 3, 
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'B',
                'title' => 'Aula de Surf - Avançado',
                'state' => 'A', 
                'location' => 'Praia do Guincho',
                'date' => Carbon::now()->addDays(10)->toDateString(),
                'price' => 50.00, 
                'duration' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'type' => 'A',
                'title' => 'Aula de Surf - Iniciação',
                'state' => 'H', 
                'location' => 'Praia de Santa Cruz',
                'date' => Carbon::now()->subDays(5)->toDateString(),
                'price' => 20.00, 
                'duration' => 2,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
        ]);
    }
}
