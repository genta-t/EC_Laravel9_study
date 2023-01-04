<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            [
                'owner_id' => 1,
                'name' => 'ここに店名が入る',
                'information' => 'ここにお店の情報が入る。ここにお店の情報が入る。ここにお店の情報が入る。',
                'filename' => 'sample.jpg',
                'is_selling' => true,
            ],
            [
                'owner_id' => 2,
                'name' => 'ここに店名が入る',
                'information' => 'ここにお店の情報が入る。ここにお店の情報が入る。ここにお店の情報が入る。',
                'filename' => 'sample2.jpg',
                'is_selling' => true,
            ],
        ]);
    }
}
