<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Fruits & Vegetables',
                'description' => 'Get fresh and organic fruits and vegetables sourced from local farms.',
            ],
            [
                'name' => 'Dairy & Eggs',
                'description' => 'Shop for fresh milk, cheese, butter, and high-quality eggs.',
            ],
            [
                'name' => 'Bakery & Snacks',
                'description' => 'Enjoy a variety of baked goods, bread, pastries, and delicious snacks.',
            ],
            [
                'name' => 'Meat & Seafood',
                'description' => 'Find premium quality meat, poultry, and seafood options for your meals.',
            ],
            [
                'name' => 'Beverages',
                'description' => 'Choose from a selection of juices, soft drinks, tea, coffee, and more.',
            ],
            [
                'name' => 'Pantry Essentials',
                'description' => 'Stock up on rice, pasta, oils, spices, and other kitchen staples.',
            ],
        ]);
    }
}
