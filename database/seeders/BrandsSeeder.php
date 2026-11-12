<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('brands')->insert([
            [
                'name' => 'Nike',
                'country' => 'USA',
                'description' => 'Sportswear and sneaker brand.',
            ],
            [
                'name' => 'Adidas',
                'country' => 'Germany',
                'description' => 'German sportswear brand.',
            ],
            [
                'name' => 'Rick Owens',
                'country' => 'USA',
                'description' => 'Designer American contemporary brand.',
            ],
            [
                'name' => 'Mizuno',
                'country' => 'Japan',
                'description' => 'High-end sneakers.',
            ],
            [
                'name' => 'Maison Margiela',
                'country' => 'France',
                'description' => 'Designer luxurious brand.',
            ],
        ]);
    }
}