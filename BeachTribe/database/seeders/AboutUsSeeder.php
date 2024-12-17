<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\support\facades\DB;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutus = [
            [
                'name' => 'Marcelo',
                'image' => 'marcelo.png',
            ],

            [
                'name' => 'João',
                'image' => 'joao.png',
            ],

            [
                'name' => 'Carolina',
                'image' => 'carolina.png',
            ],

            [
                'name' => 'Dinis',
                'image' => 'dinis.png',
            ],

            [
                'name' => 'Samuel',
                'image' => 'samuel.png',
            ],
        ];
        foreach ($aboutus as $about) {
            AboutUs::create($about);
        }
    }
}
