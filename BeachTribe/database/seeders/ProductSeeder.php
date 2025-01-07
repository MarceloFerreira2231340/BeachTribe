<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate();

        $products = [
            [
                "name" => 'Baralhos de Cartas',
                "image"=> 'Acartasazul.png',
                "link" => 'https://wordpress.g6.dwm202425.online/product/baralho-de-cartas-azul/',
            ],
            [
                "name" => 'Pins',
                "image"=> 'Apin.png',
                "link" => 'https://wordpress.g6.dwm202425.online/product/pin/',
            ],
            [
                "name" => 'Canecas',
                "image"=> 'Acaneca1.png',
                "link" => 'https://wordpress.g6.dwm202425.online/product/caneca/',
            ],
            [
                "name" => 'Autocolantes',
                "image"=> 'Aautocolante.png',
                "link" => 'https://wordpress.g6.dwm202425.online/product/autocolante/',
            ],
            [
                "name" => 'Hoodies',
                "image"=> 'Roupa-BeachTribe-11.png',
                "link" => 'https://wordpress.g6.dwm202425.online/product/hoodies-beachtribe/',
            ],
            [
                "name" => 'Bonés',
                "image"=> 'Abone1preto-600x600.png',
                "link" => 'https://wordpress.g6.dwm202425.online/product/bone-branco/',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
