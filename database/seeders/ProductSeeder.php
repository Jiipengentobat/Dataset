<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Produk Dummy',
            'description' => 'Contoh produk untuk testing API',
            'price' => 19999,
            'stock' => 5,
        ]);
    }
}
