<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'seat_number'=>'1番テーブル',
            'kind_flg' => 0,
            'store_id'=>'1',
            'seat_condition_flg' => 0,
            'delete_flg' => 0,
        ];
        DB::table('seats')->insert($param);
        $param = [
                'seat_number'=>'2番テーブル',
                'kind_flg' => 0,
                'store_id'=>'1',
                'seat_condition_flg' => 0,
                'delete_flg' => 0,
        ];
        DB::table('seats')->insert($param);

        $param = [
                'seat_number'=>'3番テーブル',
                'kind_flg' => 0,
                'store_id'=>'1',
                'seat_condition_flg' => 0,
                'delete_flg' => 0,
        ];
        DB::table('seats')->insert($param);

    }
}
