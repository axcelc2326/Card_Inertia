<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Apple', 'description' => 'Fresh red apples', 'category_id' => 1, 'whole_sale_price' => 1.50, 'retail_price' => 2.00],
            ['name' => 'Banana', 'description' => 'Organic bananas', 'category_id' => 1, 'whole_sale_price' => 0.50, 'retail_price' => 1.00],
            ['name' => 'Carrot', 'description' => 'Crunchy carrots', 'category_id' => 1, 'whole_sale_price' => 1.00, 'retail_price' => 1.50],
            ['name' => 'Broccoli', 'description' => 'Fresh green broccoli', 'category_id' => 1, 'whole_sale_price' => 1.20, 'retail_price' => 1.80],
            ['name' => 'Chicken Breast', 'description' => 'Lean chicken breast', 'category_id' => 4, 'whole_sale_price' => 3.00, 'retail_price' => 4.50],
            ['name' => 'Salmon Fillet', 'description' => 'Fresh salmon fillet', 'category_id' => 4, 'whole_sale_price' => 5.00, 'retail_price' => 6.50],
            ['name' => 'Eggs', 'description' => 'Free-range eggs', 'category_id' => 2, 'whole_sale_price' => 2.00, 'retail_price' => 3.00],
            ['name' => 'Milk', 'description' => 'Organic whole milk', 'category_id' => 2, 'whole_sale_price' => 2.50, 'retail_price' => 3.50],
            ['name' => 'Cheese', 'description' => 'Cheddar cheese', 'category_id' => 2, 'whole_sale_price' => 3.00, 'retail_price' => 4.00],
            ['name' => 'Bread', 'description' => 'Whole grain bread', 'category_id' => 3, 'whole_sale_price' => 1.50, 'retail_price' => 2.50],
            ['name' => 'Butter', 'description' => 'Salted butter', 'category_id' => 2, 'whole_sale_price' => 2.80, 'retail_price' => 3.80],
            ['name' => 'Rice', 'description' => 'Basmati rice', 'category_id' => 6, 'whole_sale_price' => 1.80, 'retail_price' => 2.80],
            ['name' => 'Pasta', 'description' => 'Italian pasta', 'category_id' => 6, 'whole_sale_price' => 2.00, 'retail_price' => 3.00],
            ['name' => 'Olive Oil', 'description' => 'Extra virgin olive oil', 'category_id' => 6, 'whole_sale_price' => 5.00, 'retail_price' => 7.00],
            ['name' => 'Tomatoes', 'description' => 'Fresh tomatoes', 'category_id' => 1, 'whole_sale_price' => 1.20, 'retail_price' => 1.80],
            ['name' => 'Orange Juice', 'description' => 'Pure orange juice', 'category_id' => 5, 'whole_sale_price' => 3.50, 'retail_price' => 4.50],
            ['name' => 'Coffee', 'description' => 'Premium roasted coffee', 'category_id' => 5, 'whole_sale_price' => 6.00, 'retail_price' => 8.00],
            ['name' => 'Green Tea', 'description' => 'Organic green tea', 'category_id' => 5, 'whole_sale_price' => 4.00, 'retail_price' => 5.50],
            ['name' => 'Honey', 'description' => 'Raw honey', 'category_id' => 6, 'whole_sale_price' => 5.50, 'retail_price' => 7.00],
            ['name' => 'Almonds', 'description' => 'Roasted almonds', 'category_id' => 6, 'whole_sale_price' => 7.00, 'retail_price' => 9.00],
            ['name' => 'Peanut Butter', 'description' => 'Natural peanut butter', 'category_id' => 6, 'whole_sale_price' => 3.50, 'retail_price' => 5.00],
            ['name' => 'Yogurt', 'description' => 'Greek yogurt', 'category_id' => 2, 'whole_sale_price' => 2.20, 'retail_price' => 3.20],
            ['name' => 'Potatoes', 'description' => 'Fresh potatoes', 'category_id' => 1, 'whole_sale_price' => 0.90, 'retail_price' => 1.40],
            ['name' => 'Strawberries', 'description' => 'Sweet strawberries', 'category_id' => 1, 'whole_sale_price' => 2.80, 'retail_price' => 3.80],
        ]);
    }
}
