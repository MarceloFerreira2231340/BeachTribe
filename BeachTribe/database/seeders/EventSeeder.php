<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table to reset the auto-increment value
        DB::table('events')->truncate();

        $events = [
            [
                'title' => 'Quim Barreiros',
                'image' => 'quimbarreiros.png',
                'description' => 'Veja o espetáculo da estrela nacional Quim Barreiros',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia da Rocha',
                'date' => '2024-06-28 18:00:00',
            ],
            [
                'title' => 'Surf',
                'image' => 'aulassurf.png',
                'description' => 'Aprenda a surfar com os melhores instrutores das nossas praias.',
                'type' => 'Formações',
                'state' => 'ativado',
                'local' => 'Praia de Carcavelos',
                'date' => '2024-07-10 09:00:00',
            ],
            [
                'title' => 'Festival do Cinema',
                'image' => 'festival_cinema.jpg',
                'description' => 'Exibição de filmes ao ar livre, aberto ao público.',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia de São Rafael',
                'date' => '2024-08-20 21:00:00',
            ],
            [
                'title' => 'Formação de Yoga',
                'image' => 'formacao_yoga.jpg',
                'description' => 'Sessões de yoga ao amanhecer, aprender a esticar-se e a relaxar.',
                'type' => 'Formações',
                'state' => 'ativado',
                'local' => 'Praia da Marinha',
                'date' => '2024-09-05 08:00:00',
            ],
            [
                'title' => 'Festival de Gastronomia',
                'image' => 'festival_gastronomia.jpg',
                'description' => 'Degustação de pratos típicos portugueses.',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia do Guincho',
                'date' => '2024-10-12 12:00:00',
            ],
            [
                'title' => 'Construções de areia',
                'image' => 'construcao_areia.jpg',
                'description' => 'Vem competir no concurso de construções de areia, qualquer um pode divertir-se!',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia da Vieira',
                'date' => '2024-11-18 15:00:00',
            ],
            [
                'title' => 'Festival de Dança',
                'image' => 'festival_danca.jpg',
                'description' => 'Apresentações de dança, e animação ao publico.',
                'type' => 'Festivais',
                'state' => 'ativado',
                'local' => 'Praia de Odeceixe',
                'date' => '2024-12-25 17:00:00',
            ],
            [
                'title' => 'Formação de Mergulho',
                'image' => 'formacao_mergulho.jpg',
                'description' => 'Curso de mergulho para iniciantes.',
                'type' => 'Formações',
                'state' => 'ativado',
                'local' => 'Praia do Amado',
                'date' => '2025-01-15 10:00:00',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
