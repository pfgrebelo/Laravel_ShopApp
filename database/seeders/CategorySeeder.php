<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Womens', 'slug' => 'womens', 'category_code' => 'W', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mens', 'slug' => 'mens', 'category_code' => 'M', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kids', 'slug' => 'kids', 'category_code' => 'K', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Home Goods', 'slug' => 'homegoods', 'category_code' => 'HG', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
