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
        $param = [
            'name' => 'お酒',
            'delete_flg' => 0,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => '一品料理',
            'delete_flg' => 0,
        ];
        DB::table('categories')->insert($param);

        $param = [
            'name' => 'おつまみ',
            'delete_flg' => 0,
        ];
        DB::table('categories')->insert($param);

    }
}
