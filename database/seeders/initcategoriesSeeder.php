<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class initcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB:table('categories')->insert([
            'name' => 'お酒'
        ],
        [
            'name' => '一品料理'
        ],
        [
            'name' => 'おつまみ'
        ]
        );
    }
}
