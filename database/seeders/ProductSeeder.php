<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = json_decode(File::get(database_path('seeders/data.json')));

        foreach ($data as $product) {
            Product::create([
               'name' => $product->name,
               'category' => $product->category,
               'image' => str_replace('./assets/images/', '', $product->image->mobile),
               'price_cents' => $product->price * 100,
            ]);
        }
    }
}
