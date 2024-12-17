<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'date' => '2024-06-15',
                'bgtime' => '08:00',
                'endtime' => '10:00',
                'price' => 30.00,
                'duration' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'M',
                'title' => 'Aula de Surf - Intermediário',
                'state' => 'A',
                'location' => 'Praia de Carcavelos',
                'date' => '2024-06-20',
                'bgtime' => '10:00',
                'endtime' => '13:00',
                'price' => 45.50,
                'duration' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'B',
                'title' => 'Aula de Surf - Avançado',
                'state' => 'A',
                'location' => 'Praia do Guincho',
                'date' => '2024-06-25',
                'bgtime' => '09:30',
                'endtime' => '11:30',
                'price' => 50.00,
                'duration' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'A',
                'title' => 'Aula de Surf - Iniciação',
                'state' => 'H',
                'location' => 'Praia de Santa Cruz',
                'date' => '2024-06-10',
                'bgtime' => '07:00',
                'endtime' => '09:00',
                'price' => 25.00,
                'duration' => 2,
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(5),
            ],
        ]);
    }
}
