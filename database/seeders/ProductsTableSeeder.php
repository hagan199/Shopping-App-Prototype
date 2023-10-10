<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            [
                'product_name' => 'Erbology',
                'description' => 'Ema',
                'image' => 'public/image/erbology.jpg',
            ],
            [
                'product_name' => 'shoe',
                'description' => 'Casuel Shoe',
                'image' => 'public/image/shoe.jpg',
            ],
            [
                'product_name' => 'Act',
                'description' => 'Painter',
                'image' => 'public/image/act.jpg',
            ],
            [
                'product_name' => 'Watch',
                'description' => 'screen smart watch',
                'image' => 'public/image/watch.jpg',
            ],
            [
                'product_name' => 'Hummelshoe',
                'description' => 'Casuel HummelShoe',
                'image' => 'public/image/hummelshoe.jpg',
            ],
            [
                'product_name' => 'Curology',
                'description' => 'only Curology',
                'image' => 'public/image/curology.jpg',
            ],
            [
                'product_name' => 'paperbag',
                'description' => 'Smart Paper Bage',
                'image' => 'public/image/paperbag.jpg',
            ],
            [
                'product_name' => 'lightcandle',
                'description' => 'Only Light',
                'image' => 'public/image/lightcandle.jpg',
            ],
            [
                'product_name' => 'tonik',
                'description' => 'Accra',
                'image' => 'public/image/tonik.jpg',
            ],
            [
                'product_name' => 'gamepad',
                'description' => 'Silver game pad',
                'image' => 'public/image/gamepad.jpg', 
            ],
            [
                'product_name' => 'atellebag',
                'description' => 'Only Silver',
                'image' => 'public/image/atellebag.jpg',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }

}

