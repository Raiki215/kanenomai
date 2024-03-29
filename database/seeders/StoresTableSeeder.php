<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => '盛岡駅前本店',
            'mail' => 'moriokaekimae@gmail.com',
            'password' => Hash::make('morijyobi'),
        ];
        DB::table('stores')->insert($param);

        $param = [
                'name' => '盛岡大通り店',
                'mail' => 'moriokaoodoori@gmail.com',
                'password' => Hash::make('toori'),
        ];
        DB::table('stores')->insert($param);

        $param = [
                'name' => '矢巾駅前本店',
                'mail' => 'yahaba@gmail.com',
                'password' => Hash::make('yahaba'),
        ];
        DB::table('stores')->insert($param);
    }
}
