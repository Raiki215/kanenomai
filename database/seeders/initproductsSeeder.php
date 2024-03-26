<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class initproductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('products')->insert([
            'name' => 'ビール',
            'price' => 500,
            'image' => 'bi-ru.jpeg',
            'category_id' => 4
        ],
        [
            'name' => '焼きそば',
            'price' => 700,
            'image' => 'yakisoba.jpg',
            'category_id' => 1
        ],
        [
            'name' => 'から揚げ',
            'price' => 450,
            'image' => 'karaage.jpg',
            'category_id' => 3
        ],
        [
            'name' => '岩手のお刺し身特盛セット（3~4人前）',
            'price' => 3300,
            'image' => 'osasimi34.jpg',
            'categorty_id' => 0
        ]
        );
    }
}
