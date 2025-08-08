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
                'lokasi'=> 'Badung',
                'kategori'=> 'Kuliner',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Ruched Crop Top',
                'harga' => 100000,
                'rating' => 5.0,
                'gambar' => 'crop.jpg',
                'lokasi'=> 'Denpasar',
                'kategori'=> 'Pakaian',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Pot Tanah Liat',
                'harga' => 50000,
                'rating' => 4.8,
                'gambar' => 'pot.jpg',
                'lokasi'=> 'Bangli',
                'kategori'=> 'Kerajinan Tangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Jepun Bali',
                'harga' => 10000,
                'rating' => 4.8,
                'gambar' => 'jepun.jpg',
                'lokasi'=> 'Gianyar',
                'kategori'=> 'Tanaman Hias',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Orange Juice',
                'harga' => 15000,
                'rating' => 4.9,
                'gambar' => 'jus.jpg',
                'lokasi'=> 'Tabanan',
                'kategori'=> 'Minuman',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Popok Bayi',
                'harga' => 45000,
                'rating' => 4.5,
                'gambar' => 'popok.jpg',
                'lokasi'=> 'Karangasem',
                'kategori'=> 'Kebutuhan Bayi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
