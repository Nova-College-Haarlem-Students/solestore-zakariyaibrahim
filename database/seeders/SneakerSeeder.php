<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SneakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
DB::table('sneakers')->insert([
            [
                'name'         => 'Air Jordan 1',
                'colorway'     => 'Chicago',
                'release_year' => 1985,
                'description'  => 'The iconic classic basketball shoe.',
                'brand_id'     => 1, // Nike (1)
            ],
            [
                'name'         => 'Air Max 90',
                'colorway'     => 'Infrared',
                'release_year' => 1990,
                'description'  => 'Classic runner with visible air unit.',
                'brand_id'     => 1, // Nike (1)
            ],
            [
                'name'         => 'Dunk Low',
                'colorway'     => 'Panda',
                'release_year' => 2021,
                'description'  => 'Extremely popular black and white sneaker.',
                'brand_id'     => 1, // Nike (1)
            ],
            [
                'name'         => 'Stan Smith',
                'colorway'     => 'White/Green',
                'release_year' => 1965,
                'description'  => 'Minimalist tennis shoe.',
                'brand_id'     => 2, // Adidas (2)
            ],
            [
                'name'         => 'Pharrell Williams Hu NMD',
                'colorway'     => 'Solar Orange',
                'release_year' => 2018,
                'description'  => 'Vibrant collaboration sneaker with unique embroidery.',
                'brand_id'     => 2, // Adidas (2)
            ],
            [
                'name'         => 'Geobasket',
                'colorway'     => 'Black/Milk',
                'release_year' => 2006,
                'description'  => 'High-top avant-garde luxury sneaker.',
                'brand_id'     => 3, // Rick Owens (3)
            ],
            [
                'name'         => 'Wave Rider 10',
                'colorway'     => 'Silver/Blue',
                'release_year' => 2007,
                'description'  => 'Performance technical runner.',
                'brand_id'     => 4, // Mizuno (4)
            ],
            [
                'name'         => 'Future High',
                'colorway'     => 'Triple White',
                'release_year' => 2014,
                'description'  => 'Minimalist high-top sneaker with hidden lacing.',
                'brand_id'     => 5, // Maison Margiela (5)
            ],
            [
                'name'         => 'Tabi Sneaker',
                'colorway'     => 'Black',
                'release_year' => 2018,
                'description'  => 'Split-toe iconic design.',
                'brand_id'     => 5, // Maison Margiela (5)
            ],
            [
                'name'         => 'Yeezy Boost 350',
                'colorway'     => 'Turtle Dove',
                'release_year' => 2015,
                'description'  => 'Knit sneaker collaboration.',
                'brand_id'     => 2, // Adidas (2)
            ],
        ]);
    }
}
