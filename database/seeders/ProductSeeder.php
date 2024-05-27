<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "iPhone 15",
            "description" => "The Best iPhone ever",
            "price" => 36000,
            "stock" => 15,
            "category_id" => 1,
        ]);

        Product::create([
            "name" => "D70",
            "description" => "The Best Camera ever",
            "price" => 15000,
            "stock" => 19,
            "category_id" => 4,
        ]);
    }
}
