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
                'product_name' => 'CBD OIL High Strength HEMP or MCT',
                'description' => 'The CBD oil in this listing is a fully natural blend of Organic Virgin Hemp or MCT and a CBD Distillate to produce a product containing guaranteed levels of CBD. Also found within are all the minor cannabinoids and Terpenes including but not limited to  CBG, CBDa ,CBC.',
                'image' => 'erbology.jpg',
                'price' => '200',
            ],
            [
                'product_name' => 'Bruno Marc Mens Mesh',
                'description' => 'Bruno Marc Mens Mesh Sneakers Oxfords Lace-Up Lightweight Casual Walking Shoes',
                'image' => 'shoe.jpg',
                'price' => '20',
            ],
            [
                'product_name' => 'Acrylic Paint Set',
                'description' => 'Acrylic Paint Set 24 Colors 30ml, Acrylic Paints with Non Toxic&Rich Pigments for Canvas/Wood/Craft/Stone/Cer',
                'image' => 'act.jpg',
                'price' => '700',
            ],
            [
                'product_name' => 'Watch',
                'description' => 'GOLDEN HOUR Mens Watch Fashion Sleek Minimalist Quartz Analog Mesh Stainless Steel Waterproof Chronograph Watches for Men with Auto Date',
                'image' => 'watch.jpg',
                'price' => '800',
            ],
            [
                'product_name' => 'Hummel Mens Hi-top Trainers',
                'description' => 'Dynamic performance with an edge. Equipped with our patented SST 8 technology, the women’s SST 8 Pro will power up your game in a sleek black and grey color duo. Featuring total interchangeable sole construction and a toe drag protector specially equipped to help prevent peel back on your slide sole, this style is equipped with removable footbeds so you can customize your comfort. * Soft, durable, man-made upper',
                'image' => 'hummelshoe.jpg',
                'price' => '290',
            ],
            [
                'product_name' => 'Aveeno Daily Moisturizer',
                'description' => 'Aveeno Daily Moisturizer, Body Lotion, For Dry Skin, Prebiotic Oat Fragrance Free, 18 fl. oz, Pack of 1',
                'image' => 'curology.jpg',
                'price' => '80',
            ],
            [
                'product_name' => 'Paper Bag',
                'description' => 'BagDream Paper Gift Bags 8x4.25x10.5 100Pcs Gift Bags Medium Size, Brown Paper Bags with Handles Bulk Wedding Party Favor Bags, Kraft Bags, Grocery Shopping Bags, Retail Merchandise Bags Gift Sacks',
                'image' => 'paperbag.jpg',
                'price' => '900',
            ],
            [
                'product_name' => 'Light Candle',
                'description' => 'Glass Battery Operated LED Flameless Candles with Remote and Timer, Real Wax Candles Warm Color Flickering Light for Festival Wedding Home Party Decor(Pack of 3)-Gold',
                'image' => 'lightcandle.jpg',
                'price' => '900',
            ],
            [
                'product_name' => 'Tonik',
                'description' => 'SLIPS EASILY ON AND OFF: With an elastic collar and a pull tab, these lace-up closure shoes are easy to take on and off. Our padded detail protects your back heel from chafing',
                'image' => 'tonik.jpg',
                'price' => '900',
            ],
            [
                'product_name' => 'GameSir T4 ',
                'description' => 'GameSir T4 Pro Wireless Game Controller for Windows 7 8 10 PC/iPhone/Android/Switch, Dual Shock USB Bluetooth Mobile Phone Gamepad Joystick for Apple Arcade MFi Games, Semi-Transparent LED Backlight',
                'image' => 'gamepad.jpg',
                'price' => '990',
            ],
            [
                'product_name' => 'Atelle',
                'description' => 'ATELLE Makeup Bag Travel Cosmetic Bag, Puffy Padded Make Up Bags for Women Large Capacity Makeup Organizer Case, Wide-open Puffer Pouch for Purse Storage Travel Essentials Dorm Toiletries Accessories Brushes, Pink',
                'image' => 'atellebag.jpg',
                'price' => '90',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }

}

