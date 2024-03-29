<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenusTableSeeder extends Seeder
{
/**
     * Run the database seeds.
     */
        public function run(): void
                {
                $param = [
                        'product_id' => 1,
                        'store_id' => 1,
                ];
                DB::table('menus')->insert($param);

                $param = [
                        'product_id' => 2,
                        'store_id' => 1,
                ];
                DB::table('menus')->insert($param);

                $param = [
                        'product_id' => 3,
                        'store_id' => 1,
                ];
                DB::table('menus')->insert($param);


                $param = [
                        'product_id' => 4,
                        'store_id' => 1,
                ];
                DB::table('menus')->insert($param);

                $param = [
                        'product_id' => 5,
                        'store_id' => 1,
                ];
                DB::table('menus')->insert($param);

                $param = [
                        'product_id' => 6,
                        'store_id' => 1,
                ];
                DB::table('menus')->insert($param);

        }
}
