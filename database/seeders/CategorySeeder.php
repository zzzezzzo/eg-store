<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["name" => "Smart Phone"]);
        Category::create(["name" => "Tablet"]);
        Category::create(["name" => "Laptop"]);
        Category::create(["name" => "Camera"]);
        Category::create(["name" => "Printer"]);
        Category::create(["name" => "Smart TV"]);
    }
}
