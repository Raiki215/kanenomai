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
        $param = [
            'name' => 'ビール',
            'price' => 500,
            'image' => 'bi-ru.jpeg',
            'category_id' => 4
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '焼きそば',
            'price' => 700,
            'image' => 'yakisoba.jpg',
            'category_id' => 1
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => 'から揚げ',
            'price' => 450,
            'image' => 'karaage.jpg',
            'category_id' => 3
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '岩手のお刺し身特盛セット（3~4人前）',
            'price' => 3300,
            'image' => 'osasimi34.jpg',
            'category_id' => 0
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '岩手のおもてなしコース',
            'price' => 5000,
            'image' => 'omotenashi.png',
            'category_id' => 0,
            'cource_flg' => 1,
        ];
        DB::table('products')->insert($param);

        $param = [
            'name' => '地酒飲み比べセット',
            'price' => 3500,
            'image' => 'nomikurabe.jpg',
            'category_id' => 0
        ];
        DB::table('products')->insert($param);
    }
}
