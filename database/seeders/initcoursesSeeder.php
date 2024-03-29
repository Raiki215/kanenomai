<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class initcoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert(
            [
                'original_cource_id' => 5,
                'product_cource_id'=> 4,
                'delete_flg' => false,
            ],
            [
                'original_cource_id' => 5,
                'product_cource_id'=> 6,
                'delete_flg' => false,
            ]
        );
    }
}
