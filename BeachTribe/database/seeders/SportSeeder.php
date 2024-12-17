<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sport;
use Illuminate\Support\Facades\DB;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate the table to reset the auto-increment value
        DB::table('sports')->truncate();

        $sports = [
            [
                'title' => 'Surf',
                'image' => 'surf.jpg',
                'difficulty' => 'Medium',
                'description' => 'Deslize pelas ondas e sinta a adrenalina de surfar.',
            ],
            [
                'title' => 'Yoga',
                'image' => 'yoga.jpg',
                'difficulty' => 'Easy',
                'description' => 'Relaxe e estique-se com as nossas aulas de yoga.',
            ],
            [
                'title' => 'Futebol',
                'image' => 'futebol.jpg',
                'difficulty' => 'Hard',
                'description' => 'Jogue futebol com os seus amigos e sinta a competição.',
            ],
            [
                'title' => 'Voleibol',
                'image' => 'voleibol.jpg',
                'difficulty' => 'Medium',
                'description' => 'Salte e ataque a bola com os seus amigos.',
            ],
            [
                'title' => 'Natação',
                'image' => 'natacao.jpg',
                'difficulty' => 'Easy',
                'description' => 'Nade e sinta a frescura da água.',
            ],
            [
                'title' => 'Caminhada',
                'image' => 'caminhada.jpg',
                'difficulty' => 'Easy',
                'description' => 'Caminhe e descubra novos locais.',
            ],
            [
                'title' => 'Ciclismo',
                'image' => 'ciclismo.jpg',
                'difficulty' => 'Medium',
                'description' => 'Pedale e sinta a brisa do vento.',
            ],
            [
                'title' => 'Corrida',
                'image' => 'corrida.jpg',
                'difficulty' => 'Hard',
                'description' => 'Corra e sinta a adrenalina da competição.',
            ],
        ];

        foreach ($sports as $sport) {
            Sport::create($sport);
        }
    }
}
