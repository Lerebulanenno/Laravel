<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'nama'  => 'Sayur Segar',
                'harga' => 10000,
                'rating'=> 4.8,
                'gambar'=> 'sayur.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Ruched Crop Top',
                'harga' => 100000,
                'rating' => 5.0,
                'gambar' => 'crop.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Pot Tanah Liat',
                'harga' => 50000,
                'rating' => 4.8,
                'gambar' => 'pot.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Jepun Bali',
                'harga' => 10000,
                'rating' => 4.8,
                'gambar' => 'jepun.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Orange Juice',
                'harga' => 15000,
                'rating' => 4.9,
                'gambar' => 'jus.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Popok Bayi',
                'harga' => 45000,
                'rating' => 4.5,
                'gambar' => 'popok.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
