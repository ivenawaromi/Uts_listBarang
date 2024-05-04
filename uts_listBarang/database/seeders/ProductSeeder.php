<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'Code_product' => 'DTP',
                'name_product' => 'Detergent Matic Power Laundry Oxy',
                'price' => '25000',
                'description' => 'Powder',
                'unit_id' => 1
            ],
            [
                'Code_product' => 'DTC',
                'name_product' => 'Olaif Powerful Cleaning Liquid Detergent',
                'price' => '34000',
                'description' => 'Liquid',
                'unit_id' => 2
            ],
            [
                'Code_product' => 'MMS',
                'name_product' => 'Dry Cleaning Machine',
                'price' => '25000000',
                'description' => 'Dry cleaning is used to wash certain fabrics, and is usually reserved for luxury',
                'unit_id' => 3
            ],
            [
                'Code_product' => 'ABL',
                'name_product' => 'Basket Laundry',
                'price' => '22000',
                'description' => 'A place to store dirty clothes at home',
                'unit_id' => 4
            ],
            [
                'Code_product' => 'AHN',
                'name_product' => 'Hanger',
                'price' => '18000',
                'description' => 'hangers made of thick plastic that can hold clothes',
                'unit_id' => 5
            ],
        ]);
    }
}
