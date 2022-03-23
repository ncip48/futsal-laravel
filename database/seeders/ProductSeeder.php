<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Sintetis',
                'image' => 'https://assets.skor.id/crop/0x0:0x0/x/photo/2020/08/15/2110142668.jpg',
                'description' => 'asdf',
                'price' => '15000'
            ],
            [
                'name' => 'Non Sintetis',
                'image' => 'https://www.lantaifutsal.com/wp-content/uploads/2019/10/Rumput-sintetis-outdoor-1.jpg',
                'description' => 'gdherth',
                'price' => '25000'
            ],
        ]);
    }
}
