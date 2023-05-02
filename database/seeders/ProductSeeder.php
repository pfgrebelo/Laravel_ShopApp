<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // WOMEN
        for ($i = 1; $i <= 12; $i++) {
            $category = Category::find(1);
            Product::create([
                'name' => 'Women ' . $i,
                'slug' => 'women-' . $i,
                'details' => 'women\'s hoodie',
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ])->categories()->attach($category);
        }

        $product = Product::find(1);
        $product->categories()->attach(4);

        // MEN
        for ($i = 1; $i <= 12; $i++) {
            $category = Category::find(2);
            Product::create([
                'name' => 'Men ' . $i,
                'slug' => 'men-' . $i,
                'details' => 'men\'s hoodie',
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ])->categories()->attach($category);
        }
        // KIDS
        for ($i = 1; $i <= 12; $i++) {
            $category = Category::find(3);
            Product::create([
                'name' => 'Kids ' . $i,
                'slug' => 'kids-' . $i,
                'details' => 'kid\'s hoodie',
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ])->categories()->attach($category);
        }
        // HOME GOODS
        for ($i = 1; $i <= 12; $i++) {
            $category = Category::find(4);
            Product::create([
                'name' => 'Home Goods ' . $i,
                'slug' => 'homegoods-' . $i,
                'details' => 'homegoods',
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                'product_code' => $category->category_code.'-00'.$i,
                'price' => rand(999, 9999),
                'quantity' => rand(1, 10),
            ])->categories()->attach($category);
        }
    }
}
